let currentURL = document.location.href;
let windowResizedWidth = window.innerWidth;
// * Window Resize catchers
window.onload = function () {
  ObjectivesColumnDisplay();
};

window.onresize = function () {
  windowResizedWidth = window.innerWidth;
  ObjectivesColumnDisplay();
};

// ! Turn functions into ES6

(function reorderImages() {
  let images = document.querySelectorAll("figure");

  images.forEach((image) => {
    if (!currentURL.includes("what-we-do")) {
      image.classList.add("custom");
      image.classList.add("full");
    }
  });
})();

(function reorderParagraphs() {
  let images = document.querySelectorAll("p");

  images.forEach((image) => {
    image.classList.add("my-2");
    image.classList.add("text-lg");
  });
})();

(function reorderHeadings() {
  let images = document.querySelectorAll("h2");

  images.forEach((image) => {
    image.classList.add("my-2");
    image.classList.add("text-2xl");
    image.classList.add("font-black");
  });
})();

(function reorderSubHeadings() {
  let images = document.querySelectorAll("h3");

  images.forEach((image) => {
    image.classList.add("my-2");
    image.classList.add("text-xl");
    image.classList.add("font-bold");
  });
})();

(function reorderSecondaryHeadings() {
  let images = document.querySelectorAll("h4");

  images.forEach((image) => {
    image.classList.add("my-2");
    image.classList.add("text-xl");
    image.classList.add("font-bold");
  });
})();

// (function reorderSecondaryHeadings() {
//   let images = document.querySelectorAll("i");

//   images.forEach((image) => {
//     let parentElement = image.parentElement.toString();
//     if (!parentElement.includes("http")) {
//       image.classList.add("text-[#131616]");
//     }
//   });
// })();

(function centerImages() {
  let images = document.querySelectorAll("img");

  images.forEach((image) => {
    // Get parent level
    let parentElementType = image.parentElement.nodeName;

    if (
      parentElementType !== "A" &&
      !image.classList.contains("exclude__global")
    ) {
      image.classList.add("drop-shadow-xl");
      image.style.boxShadow = "none";
      image.classList.add("mx-auto");
    }
  });
})();

(function redesignCover() {
  let covers = document.querySelectorAll("div.wp-block-cover");

  covers.forEach((cover) => {
    let spanChild = cover.children[0];
    let imageChild = cover.children[1];
    let contentChild = cover.children[2];

    cover.classList.add("min-h-[213px]");
    cover.classList.add("my-4");

    if (contentChild.innerHTML.includes("contain")) {
      contentChild.remove();
      imageChild.style.objectFit = "contain";
    }

    imageChild.classList.add("drop-shadow-xl");
    imageChild.style.boxShadow = "none";
    imageChild.classList.add("rounded-2xl");
    imageChild.classList.add("drop-shadow-xl");

    spanChild.remove();
  });
})();

(function removePDFObject() {
  let pdfFiles = document.querySelectorAll(".wp-block-file");

  pdfFiles.forEach((pdfFile) => {
    let pdfFileObject = pdfFile.children[0];

    pdfFile.style.margin = "1rem 0px";

    if (pdfFileObject.nodeName === "OBJECT") {
      let pdfFileName = pdfFile.children[1];
      pdfFileObject.remove();
      pdfFileName.style.textTransform = "uppercase";
      pdfFileName.innerHTML += " ( Click to view in the browser )";
      pdfFileName.style.marginRight = "10px";
    } else {
      let pdfFileName = pdfFile.children[0];
      pdfFileName.style.textTransform = "uppercase";
      pdfFileName.innerHTML += " ( Click to view in the browser )";
      pdfFileName.style.marginRight = "10px";
    }
  });
})();

(function reorderWPColumns() {
  let allColumns = document.querySelectorAll(".wp-block-columns");

  allColumns.forEach((column) => {
    column.classList.add("gap-[10px]");
  });
})();

const ObjectivesColumnDisplay = () => {
  let wpColumns = document.querySelectorAll(".wp-block-columns");
  wpColumns.forEach((objectiveColumn) => {
    // * Tweak needed for [0]
    let objectivesContainer =
      objectiveColumn.children[0].children[0].classList.contains("bg-slate-50");
    let columnChildren = objectiveColumn?.children;

    if (objectivesContainer) {
      for (let index = 0; index < columnChildren.length; index++) {
        const element = columnChildren[index];
        element.classList.add("flex");
        if (windowResizedWidth < 768) {
          element.classList.add("min-w-full");
        } else {
          element.classList.remove("min-w-full");
        }
      }

      for (let index = 0; index < columnChildren.length; index++) {
        const element = columnChildren[index].children;
        // ! Grab the first child - working if guidelines are followed
        element[0].classList.add("w-full");
      }
    }
  });
};
