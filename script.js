    function addEntry(){
            var entry="<input type='text' name='place_of_origin[]' placeholder='Enter here...' class='form-control' required='required'/>";
            var element=document.createElement("div");
            element.setAttribute('class', 'form-group');
            element.innerHTML=entry;
            document.getElementById('place_of_origin').appendChild(element);
    }

      function addEntry2(){
            var entry="<input type='text' name='notable_band[]' placeholder='Enter here...' class='form-control' required='required'/>";
            var element=document.createElement("div");
            element.setAttribute('class', 'form-group2');
            element.innerHTML=entry;
            document.getElementById('notable_band').appendChild(element);
    }
