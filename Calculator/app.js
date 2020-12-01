document.getElementById("loan-form").addEventListener("submit", function(e){

    document.getElementById('results').style.display = 'block';
    
    document.getElementById('loading').style.display = 'none';
  
    setTimeout(calResult, 2000);
  
    e.preventDefault();

});

// function calResult(e) { 

//     console.log('Calculating...');

//     const a = document.getElementById('amount');

//     const i = document.getElementById('interest');

//     const t = document.getElementById('time');

//     const mp = document.getElementById('monthly-payment');

//     const tp = document.getElementById('total-payment');

//     const ti = document.getElementById('total-interest');
    
//     const p = parseFloat(a.value);

//     const ci = parseFloat(i.value) / 100 / 12;

//     const cp = parseFloat(t.value) * 12;

//     const x = Math.pow(1 + ci, cp);

//     const monthly = (p*x*ci)/(x-1);

//     if(isFinite(monthly)) {

//         mp.value = monthly.toFixed(2);

//         tp.value = (monthly * cp).toFixed(2);

//         ti.value = ((monthly * cp)-p).toFixed(2);

//         document.getElementById('results').style.display = 'block';

//         document.getElementById('loading').style.display = 'none';

//     } 
    
//     else {

//         showerror('Please check your numbers');

//     }

// }

function calResult(){

    console.log('Calculating...');
    
    const amount = document.getElementById('amount');

    const interest = document.getElementById('interest');

    const years = document.getElementById('years');

    const monthlyPayment = document.getElementById('monthly-payment');

    const totalPayment = document.getElementById('total-payment');

    const totalInterest = document.getElementById('total-interest');

    const principal = parseFloat(amount.value);

    const calculatedInterest = parseFloat(interest.value) / 100 / 12;

    const calculatedPayments = parseFloat(years.value) * 12;

    const x = Math.pow(1 + calculatedInterest, calculatedPayments);

    const monthly = (principal*x*calculatedInterest)/(x-1);

    if(isFinite(monthly)) {

        monthlyPayment.value = monthly.toFixed(2);

        totalPayment.value = (monthly * calculatedPayments).toFixed(2);

        totalInterest.value = ((monthly * calculatedPayments)-principal).toFixed(2);

        document.getElementById('results').style.display = 'block';
    
        document.getElementById('loading').style.display = 'none';
  
    } 
    
    else {

        showerror('Please check your numbers');

    }

}

function showerror(error){
    
    document.getElementById('results').style.display = 'none';
    
    document.getElementById('loading').style.display = 'none';
  
    const errorDiv = document.createElement('div');
  
    const card = document.querySelector('.card');

    const heading = document.querySelector('.heading');
  
    errorDiv.className = 'alert alert-danger';
  
    errorDiv.appendChild(document.createTextNode(error));
  
    card.insertBefore(errorDiv, heading);
  
    setTimeout(clearError, 3000);

} 
  
function clearError() {

    document.querySelector('.alert').remove();

}

// Listen for submit
// document.getElementById('loan-form').addEventListener('submit', function(e){
//     // Hide results
//     document.getElementById('results').style.display = 'none';
    
//     // Show loader
//     document.getElementById('loading').style.display = 'block';
  
//     setTimeout(calculateResults, 2000);
  
//     e.preventDefault();
//   });
  
//   // Calculate Results
//   function calculateResults(){
//     console.log('Calculating...');
//     // UI Vars
//     const amount = document.getElementById('amount');
//     const interest = document.getElementById('interest');
//     const years = document.getElementById('years');
//     const monthlyPayment = document.getElementById('monthly-payment');
//     const totalPayment = document.getElementById('total-payment');
//     const totalInterest = document.getElementById('total-interest');
  
//     const principal = parseFloat(amount.value);
//     const calculatedInterest = parseFloat(interest.value) / 100 / 12;
//     const calculatedPayments = parseFloat(years.value) * 12;
  
//     // Compute monthly payment
//     const x = Math.pow(1 + calculatedInterest, calculatedPayments);
//     const monthly = (principal*x*calculatedInterest)/(x-1);
  
//     if(isFinite(monthly)) {
//       monthlyPayment.value = monthly.toFixed(2);
//       totalPayment.value = (monthly * calculatedPayments).toFixed(2);
//       totalInterest.value = ((monthly * calculatedPayments)-principal).toFixed(2);
  
//       // Show results
//       document.getElementById('results').style.display = 'block';
  
//       // Hide loader
//       document.getElementById('loading').style.display = 'none';
  
//     } else {
//       showError('Please check your numbers');
//     }
//   }
  
//   // Show Error
//   function showError(error){
//     // Hide results
//     document.getElementById('results').style.display = 'none';
    
//     // Hide loader
//     document.getElementById('loading').style.display = 'none';
  
//     // Create a div
//     const errorDiv = document.createElement('div');
  
//     // Get elements
//     const card = document.querySelector('.card');
//     const heading = document.querySelector('.heading');
  
//     // Add class
//     errorDiv.className = 'alert alert-danger';
  
//     // Create text node and append to div
//     errorDiv.appendChild(document.createTextNode(error));
  
//     // Insert error above heading
//     card.insertBefore(errorDiv, heading);
  
//     // Clear error after 3 seconds
//     setTimeout(clearError, 3000);
//   }
  
//   // Clear error
//   function clearError(){
//     document.querySelector('.alert').remove();
//   }