// Для работы с пакетами требуется:
// 1. Установить пакет
// 2. Подключить пакет к gulpgile.js
// 3. Используем пакет в нашей программе

let gulp = require('gulp');
let importCss = require('gulp-import-css');
let autoprefixer = require('gulp-autoprefixer');
let cssmin = require('gulp-cssmin');
let rename = require('gulp-rename');
let watch = require('gulp-watch');

function generateStyles (){
   
// Что указать в функции:
//     1.Откуда мы берем файлы, с которыми хотим что-то сделать.
return gulp.src('styles/products.css')
.pipe(importCss())
.pipe(autoprefixer({
 browsers:['last 10 version']
}))
.pipe(cssmin())
.pipe(rename({suffix: '.min'}))
.pipe(gulp.dest('styles/dist'));
//     2. Что мы делаем с этими файлами.
//     3. Куда мы помещаем результат.

};

function generateBacketStyles (){
   
    // Что указать в функции:
    //     1.Откуда мы берем файлы, с которыми хотим что-то сделать.
    return gulp.src('styles/backet.css')
    .pipe(importCss())
    .pipe(autoprefixer({
     browsers:['last 10 version']
    }))
    .pipe(cssmin())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('styles/dist'));
    //     2. Что мы делаем с этими файлами.
    //     3. Куда мы помещаем результат.   
    };

function generateAllStyles(){
    gulp.task('styles', generateStyles);
    gulp.task('backet', generateBacketStyles);
}

gulp.task('allFiles', generateAllStyles);
