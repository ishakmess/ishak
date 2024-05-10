let scrollElement = document.getElementById("scrole");
console.log(scrollElement);

window.onscroll = function () {
  if (window.scrollY >= 300) {
    scrollElement.style.display = "flex";
  } else {
    scrollElement.style.display = "none";
  }
};

scrollElement.onclick = function () {
  window.scrollTo({
    left: 0,
    top: 0,
    behavior: "smooth",
  });
};
