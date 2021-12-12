<script>

    function showDiv( id_div, id_button) {
        
        var maDiv = document.getElementById(id_div);

        //get the current value of div's  diasplay property
        var displaySetting = maDiv.style.display;

        //get the id of button that will display our div's button
        var monButton = document.getElementById(id_button);

        if (displaySetting == 'block') {
            maDiv.style.display = 'none';
            monButton.innerHTML = "<img src=\'../img/share_30px.png'  class =\'icon\'>"
            
        } else {
            maDiv.style.display = 'block';
            monButton.innerHTML = "<img src=\'../img/multiply_24px.png'  class =\'icon\'>";
        }               
                        
    }
    
</script>