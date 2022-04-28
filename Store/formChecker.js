document.addEventListener("DOMContentLoaded",() =>
{
    document.querySelector("#submit").addEventListener("click",(e) =>
    {
        //variables
        let heartsQuantity = document.getElementById('hearts');
        let clubsQuantity = document.getElementById('clubs');
        let diamondsQuantity = document.getElementById('diamonds');
        let spadesQuantity = document.getElementById('spades');
        let contact = document.getElementById('userID');
        let password = document.getElementById('password');
        let free = document.getElementById('free');
        let fifty = document.getElementById('50');
        let five = document.getElementById('5');

        //Scripts to make sure everything is selected.
        if (heartsQuantity.value == "" && clubsQuantity.value == "" && diamondsQuantity.value == "" && spadesQuantity.value == "")
        {
            alert("You must purchase something! The quantities can't be blank.");
            e.preventDefault();
        }
        if (!checkEmail(contact.value))
        {
            alert("That is not a valid email!");
            e.preventDefault();
        }
        if(password.value.length == 0)
        {
            alert("You must make a password!");
            e.preventDefault();
        }
        if (free.checked == false && fifty.checked == false && five.checked == false)
        {
            alert("You must select a shipping option!");
            e.preventDefault();
        }
    });

    //Script to check if contact is vaild.
    function checkEmail(contact)
    {   
        let passed = false;
        for (let i = 0; i < contact.length; ++i)
        {
            console.log(contact[i]);
            console.log("length: " + contact.length);
            if (contact[i] == "@" && i != 0 && i != contact.length-1)
            {
                console.log("when true:" + i);
                passed = true;
            }
        }
        return passed;
    }
});