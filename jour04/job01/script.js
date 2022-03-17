window.addEventListener("DOMContentLoaded", () => {
  let btn = document.querySelector("#button");


  btn.addEventListener("click", () => {
    fetch("expression.txt")
      .then((response) => response.text())
      .then((response) => {
        console.log(response);
        
        let newPara = document.createElement("p");
        newPara.innerHTML = response;

        document.body.insertBefore(newPara, button);
      })
      .catch((error) => console.log(error));
  });
});