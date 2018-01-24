function verifAge(champ)
        {
           var age = parseInt(champ.value);
           if(isNaN(age) || age < 0 || age > 120)
           {
              alert("L'age n'est pas bon");

              return false;
           }
           else
           {
              return true;
           }
        }
