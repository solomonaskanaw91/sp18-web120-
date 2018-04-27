// create the template for the objects that of Tea which will have tea type and 
function Tea(type,caffeine){
    //assign the args to the properties of the Hotel object which is also a function of the two variables of the (quay,park). 
   this.type = type; 
   this.caffeine = caffeine;     
    //create the method this is done using the literal notation.Also to rememeber that the properties are rooms and booked.
   this.Tea_Type = function() {
       return this.type - this.caffeine;//this is in the literal notation method.
   };
    
}

//create two instances of the hotle objects
var GreenTea = new Tea('Green',40,);///remember the par's are names,rooms,booked are listed as the fiest par's in function Hotel. 
var BlackTea = new Tea('Black',30,);
//change the values of the porperties
GreenTea.caffeine = 80;
BlackTea.caffeine = 60;
//update the HTML for the page
var details1 = GreenTea.name + " " + 'caffeine' + " ";
//accumlate stings in detail
//same as writing details1 = details1 + ...
details1 += GreenTea.caffeine();
var elCaffeine1 = document.getElementById('Caffeine1');
elCaffeine1.textContent = details1;

/*second hotel 
var details2 = parkHotel.name + " " + 'rooms' + " ";
details2 += parkHotel.checkAvailabity();
var elHotel2 = document.getElementById('hotel2');
elHotel2.textContent = details2;
*/