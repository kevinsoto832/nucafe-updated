export function formFunctionality() {
    //add data-multi-step attribute to the form tag
    var careerForm = document.querySelector('.career-form');
    careerForm.setAttribute('data-multi-step', "");

    const formSteps = [...careerForm.querySelectorAll("[data-step]")];

    let currentStep = formSteps.findIndex(step => {
        return step.classList.contains("active")
    })
   
    //if there are no steps with the class active (-1)
    if (currentStep < 0) {
        //currentStep = 0 will target the first step 
        currentStep = 0;
        formSteps[currentStep].classList.add("active");
        // showCurrentStep();
    }

    careerForm.addEventListener("click", e => {
      
    let incrementor
    if (e.target.matches("[data-next]")) {
        incrementor = 1;
    } else if (e.target.matches("[data-previous]")) {
        incrementor = -1;
    } 
    
    if (incrementor == null) return

    const inputs = [...formSteps[currentStep].querySelectorAll("input")];
    console.log(inputs);
    const allValid = inputs.every(input => input.reportValidity());

    console.log(allValid);

    if (allValid) {
        console.log(currentStep);
        currentStep += incrementor;
        console.log(currentStep);
        showCurrentStep(); 
    }
    
  })

  function showCurrentStep() {
    formSteps.forEach((step, index) => {
        step.classList.toggle("active", index === currentStep)
    })
  }

}
