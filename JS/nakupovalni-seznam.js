var input = document.getElementById("one-item");
var groceryContainer = document.getElementsByClassName("grocery-container")[0];
var count = 1;
var currentVh = 100;

input.addEventListener("keydown", function(event){
  if(event.key == "Enter"){
    addItem();
  }
});

function addItem(){
  var item = "- " + document.getElementById("one-item").value;
  var h1 = document.createElement("h1");

  document.getElementById("one-item").value = '';

  h1.appendChild(document.createTextNode(item));

  h1.addEventListener("click", function(){
    h1.style.textDecoration = "line-through";
  })
  h1.addEventListener("dblclick", function(){
    h1.style.textDecoration = "none";
  })

  var div = document.getElementById("all-items");
  div.insertAdjacentElement("beforeend", h1);

  increaseVh(count++);
}

function increaseVh(c){
  if(c > 12){
    currentVh += 7;
    groceryContainer.style.height = currentVh.toString() + 'vh';
  }
}

function eraseList(){
  var list = document.getElementById("all-items");
  var i = 0;

  count = 1;
  currentVh = 100;
  groceryContainer.style.height = currentVh.toString() + 'vh';

  while(i < list.childNodes.length){
    list.removeChild(list.childNodes[i]);
  }
}