const addTaskBtn = document.getElementById("addTaskBtn");
const closeTaskBtn = document.getElementById("x");
const taskForm = document.getElementById("taskForm");
const taskContainer = document.getElementById("taskContainer");

addTaskBtn.addEventListener("click", () => {
  // إظهار أو إخفاء الفورم
  taskForm.style.display = taskForm.style.display === "none" ? "block" : "none";
  
});

// إخفاء الفورم
closeTaskBtn.addEventListener("click", () => {
  taskForm.style.display = taskForm.style.display === "none" ? "block" : "none";
});

taskForm.addEventListener("submit", function (e) {
  e.preventDefault(); // منع إعادة تحميل الصفحة

  // جلب القيم الحالية من الحقول
  const title = document.getElementById("taskTitle").value;
  const title_Majuscule = title.toUpperCase()
  const description = document.getElementById("taskDescription").value;
  const time = document.getElementById("tasktime").value
  // إنشاء عنصر كرت المهمة
  const card = document.createElement("div");
  card.className = "task-card";
  card.innerHTML = `
    <div class="done_div">
    <label class="checkbox">
    <input hidden="" type="checkbox" class="done" />
    
    <svg viewBox="0 0 44 44" class="sizer checkmark">
    <path
    d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"
    transform="translate(-2.000000, -2.000000)"
    ></path>
    </svg>
    </label>

    </div>
    


    <h1 id="title_and_time">${title_Majuscule}<span id="span_time">${time}</span></h1>
    <p>${description}</p>
    <div class="actions">
        


      
<button
  class=" delete inline-flex items-center px-4 py-2 bg-red-600 transition ease-in-out delay-75 hover:bg-red-700 text-white text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110"
>
  <svg
    stroke="currentColor"
    viewBox="0 0 24 24"
    fill="none"
    class="h-5 w-5 mr-2"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
      stroke-width="2"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>

  Delete
</button>


<button
  class="modify inline-flex items-center justify-center px-4 py-2 bg-blue-600 ease-in-out delay-75 hover:bg-blue-700 text-white text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-110 active:scale-95 transition-all duration-200"
>
  <svg
    class="h-5 w-5 mr-1 self-center items-center"
    fill="none"
    stroke="currentColor"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"
    ></path>
  </svg>
  Edit
</button>


      
      
    </div>
  `;
  taskForm.style.display = "none";
const deleteBtn = card.querySelector(".delete");
deleteBtn.addEventListener("click", function () {
card.remove(); // حذف الكرت

})
 // done button 
const done = card.querySelector(".done")
const del = card.querySelector(".delete")
const mof = card.querySelector(".modify")
const actions = card.querySelector(".actions")
done.addEventListener("change", function () {
  if (this.checked) {
    card.style.backgroundColor = "lightgreen"
    card.style.opacity = "0.7"
    card.style.textDecoration = "line-through";
    card.style.opacity = "0.8"
    card.style.scale = "0.99"
    mof.style.display="none"
    del.style.width="200px"
    del.style.textDecoration="none"}
   
   else {
    card.style.backgroundColor = "white"
    card.style.opacity = "1"
    card.style.textDecoration = "none";
    card.style.opacity = "1"
    card.style.scale = "1"
    
     
    del.style.width="100px"
       del.style.textDecoration="none"


    

    
  }
});

  taskContainer.appendChild(card);
  document.getElementById("taskTitle").value = "";
  document.getElementById("taskDescription").value = "";

  
})

// إخفاء الفورم من جديد (اختياري)



// var del =document.getElementsByClassName("delete")
// del.addEventListener("click", () => {
//   taskContainer.removeChild(card)
// })
// const deleteBtn = card.querySelector(".delete");
// deleteBtn.addEventListener("click", () => {
//   taskContainer.removeChild(card);
// });

// taskContainer.addEventListener("click", function (e) {
//   if (e.target.classList.contains("delete")) {
//     const card = e.target.closest(".task-card");
//     if (card) {
//       card.remove(); // حذف الكرت
//     }
//   }
// });
