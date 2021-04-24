/* ========================================================
バーガーメニュー
=========================================================*/
const toggleNav = () => {
  const body = document.body;
  const burger = document.querySelector("#js-burger");

  burger.addEventListener("click", () => {
    body.classList.toggle("nav-open");
  });
};
toggleNav();


/* ========================================================
スクロールでサイズが小さくなるヘッダー
=========================================================*/
window.addEventListener("scroll", () => {
  // 要素を取得
  const header = document.querySelector("#header");
  const headerBar = document.querySelector("#header__bar");
  const headerInner = document.querySelector("#header__inner");
  const headerImg = document.querySelector("#header__img");
  // ヘッダーの高さを取得
  const headerHeight = header.clientHeight;
  // 現在地を示す変数を定義
  let pos = 0;

  // スクロール量を取得
  pos = window.scrollY;

  // スクロール位置がヘッダーの高さ分より大きい場合にclass名を追加し、そうでない場合にclass名を削除
  if (pos > headerHeight) {
    header.classList.add("scroll-nav");
    headerBar.classList.add("scroll-nav");
    headerInner.classList.add("scroll-nav");
    headerImg.classList.add("scroll-nav");
  } else {
    header.classList.remove("scroll-nav");
    headerBar.classList.remove("scroll-nav");
    headerInner.classList.remove("scroll-nav");
    headerImg.classList.remove("scroll-nav");
  }
});
