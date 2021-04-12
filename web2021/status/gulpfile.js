
const gulp = require( "gulp" );
// Sassをコンパイルするプラグインの読み込み
const sass = require( "gulp-sass" );

// style.scssをタスクを作成する
gulp.task ( "sass", () => {
  // style.scssファイルを取得
  return ( gulp.src ( "./sass/style.scss" )
      // Sassのコンパイルを実行
      .pipe ( sass ({ outputStyle: "expanded" }))
      // cssフォルダー以下に保存
      .pipe ( gulp.dest ( "./css" )));
    })

// sassファイルを常に監視
gulp.task( "sass:watch", () => {
      // "sass”を同期処理するならseries、非同期ならparallelを使う
      gulp.watch( "./sass/**/*.scss", gulp.series ( "sass" ));
})
