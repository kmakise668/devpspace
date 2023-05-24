const path = require('path');
const chokidar = require('chokidar');
const ftp = require('basic-ftp');

// Подключение к FTP-серверу и отправка файла
async function uploadFile(localPath, remotePath) {
    const client = new ftp.Client();
    try {
        await client.access({
            host: '194.39.65.17',
            port: 21,
            user: 'devpspa1',
            password: 'KbR3_dd63!6y',
        });
        await client.uploadFrom(localPath, remotePath);
        console.log(`Файл ${localPath} успешно отправлен по FTP.`);
    } catch (error) {
        console.error(`Ошибка при отправке файла по FTP: ${error}`);
    } finally {
        client.close();
    }
}


function watchPhpFiles() {
    const watcher = chokidar.watch('.', {
        ignored: /node_modules/,
        persistent: true,
        ignoreInitial: true,
        awaitWriteFinish: true, // Добавляем параметр awaitWriteFinish для отслеживания завершения записи файла
    });


    watcher.on('all', (event, filePath) => {
        if (event !== 'addDir') {
            const remotePath = '/httpdocs/' + path.relative('.', filePath);
            uploadFile(filePath, remotePath);
        }
    });
}

// Запуск отслеживания файлов
watchPhpFiles();