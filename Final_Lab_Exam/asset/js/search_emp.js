 function search_emp(){
        // event.preventDefault();
        search = document.getElementById("search").value;
        let xhttp = new XMLHttpRequest();
        xhttp.open("post", "../controller/search_emp.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("search=" + search);
        
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
              let tableBody = document.querySelector("table tbody");
        
              if (!tableBody) {
                tableBody = document.createElement("tbody");
                document.querySelectorAll("table").appendChild(tableBody);
              }
        
              if (this.responseText == "No Employer found") {
                let messageRow = document.createElement("tr");
                let messageCell = document.createElement("td");
                messageCell.setAttribute("colspan", "8"); 

                messageCell.innerHTML = "No Employer found"; 
                messageCell.style.cssText =
                  "text-align :center; height : 300px; font-size:100px; font-weight:bold; color:red";
                messageRow.appendChild(messageCell);
                tableBody.innerHTML = ""; 
                tableBody.appendChild(messageRow);
              } else {
                tableBody.innerHTML = this.responseText;
              }
            }

}
 }