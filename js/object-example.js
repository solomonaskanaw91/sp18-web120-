// create the template for the objects that are all the para for the object of the Gym in this case the para's will be  



function Gym(name,membership_price){
//assign the args to the properties. 
   this.name = name; 
   this.membership_price = membership_price; 
//create the method this is done using the literal notation.Also to rememeber that the properties are rooms and booked.
   this.MembershipPrice = function(){/////<h2>MembershipPrice</h2>
   return this.name - this.membership_price;//This would return the pars in the that have been added to the membership_price 
   };
    
}
//this is outside the scope of the object gym within the function of this.membership_price.
//create two instances of the gym objects
var anyTimeFitnessGym = new Gym(0);///remember the par's are names,rooms,booked are listed as the fiest par's in function Hotel. 
var laFitnessCenterGym = new Gym(0);
//change the values of the porperties

//anyTimeFitnessGym.name = 400;
//laFitnessCenterGym.name = 300;

//Test detail#1
//Test detail#2

//update the HTML for the page
var details1 = anyTimeFitnessGym.name + " " + ' Any Time Fitness Gym ' + " ";
details1 += anyTimeFitnessGym.MembershipPrice();
var elGym1 = document.getElementById('gym1');
elGym1.textContent = details1;
///////////////////////////////
var details2 = laFitnessCenterGym.name + " " + ' La Fitness Center Gym ' + " ";
details2 += laFitnessCenterGym.MembershipPrice();
var elGym2 = document.getElementById('gym2');
elGym2.textContent = details2;