#!/bin/bash

# Функция для синхронизации изменений
sync_changes() {
  # Отправка изменений на удаленный репозиторий
  git add .
  git commit -m "Automatic sync"
  git push origin main

}

# Мониторинг изменений в файлах
while true; do
#   inotifywait -e close_write -r . && sync_changes
inotifywait -e close_write ./index.php && sync_changes
done
