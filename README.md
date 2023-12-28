# Laravel Test Application

## Компиляция и сборка

### Перед запуском проекта, необходимо скомпилировать фронтенд часть (стилевые `.scss` файлы) при помощи:

*npm:*
```bash
npm i
npm run build
```

*yarn:*
```bash
yarn i
yarn build
```

Далее изменить базу данных в `.env` файле. В качестве примера можно использовать файл [.env.example](.env.example).

После выполнить миграции:
```bash
php artisan migrate
```

### Либо параллельно с проектом запускать без сборки:

*npm:*
```bash
npm run dev
```
*yarn:*
```bash
yarn dev
```

## Запуск

```bash
php artisan serve
```