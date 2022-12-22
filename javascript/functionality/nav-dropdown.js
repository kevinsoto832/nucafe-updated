// [data-dropdown-button] & [data-dropdown] are both added via the script.js file. 

export function dropdown() {

    document.addEventListener('click', e => {

        //data attribute selectors are useful for having more descriptive HTML code and to separate JS selectors from CSS selectors

        //data-dropdown-button is esentially the product link
        const isDropdownButton = e.target.matches("[data-dropdown-button]")
        if (!isDropdownButton && e.target.closest("[data-dropdown]") != null) return

        let currentDropdown
        if (isDropdownButton) {
            currentDropdown = e.target.closest("[data-dropdown]")
            currentDropdown.classList.toggle("active")
        }

        //loops thhrough all the other dropdowns and closes the dropdowns that aren't the current dropdown
        document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
            if (dropDown === currentDropdown) return
            dropdown.classList.remove("active")
        })
    })


}