(function(){
  const counterTot = document.querySelector(".total-count");
  const slideArr = Array.from(document.querySelectorAll(".gallery-item"));

  const slideCountTotal = function(array) {
    return `<p class="total-slide-number">/ ${array.length}</p>`;
  };

  counterTot.insertAdjacentHTML("beforeend", slideCountTotal(slideArr));

  

  
})();




