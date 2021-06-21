function izracun()
{
    
    var Starost = Number(document.getElementById("starost").value);
    var Visina = Number(document.getElementById("visina").value);
    var Teza = Number(document.getElementById("teza").value);
  
    
    var input = 13.397 * Teza + 4.799 * Visina - 5.677 * Starost + (88.362);
    var output = Math.floor(input);

    var str='<span>'+output+'</span>';
    
    document.getElementById("rezultat").innerHTML = str;
}

document.getElementById("btnIzracun").addEventListener('click',izracun)


function izracun2()
{
    var kolicina = Number(document.getElementById("zauzitaKolicina").value);
    var Kalorije  = (Number(document.getElementById("kalorije").value) / 100) * kolicina;

    var output = Math.floor(Kalorije);
    
    document.getElementById("rezultat2").innerHTML = output;
};


// *******************************************************************************


document.getElementById("btnDodaj").addEventListener("click", function() 
{
    addItem();
});

function addItem(){
  var div = document.createElement("div");
  div.className = "vnos";
  var option = document.createElement("option");
  option.className = "select-izbira";
  var input = document.createElement("input");
  input.className = "input2";                
  var input2 = document.createElement("input");
  input2.className = "sestavina-kalorije";          
  div.appendChild(option);
  div.appendChild(input);
  div.appendChild(input2);
  document.getElementById("vnos-celota").appendChild(div);                             
}


