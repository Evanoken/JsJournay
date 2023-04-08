/* In this section, you will learn how to use JavaScript and DOM API features to alternate the display of one of two images. This change will happen as a user clicks the displayed image.*/
const myImage = document.querySelector("img");

myImage.onclick = () => {
  const mySrc = myImage.getAttribute("src");
  if (mySrc === "img2.png") {
    myImage.setAttribute("src", "img1.jpg");
  } else {
    myImage.setAttribute("src", "img2.png");
  }
};
