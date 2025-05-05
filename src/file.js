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


    <h1 id="title_and_time">${title_Majuscule} <span id="span_time">${time}</span></h1>
    <p>${description}</p>
    <div class="actions">
        


      
      <button class="modify">Modify</button>
      <button class="delete">Delete</button>
    </div>
  `;
  taskForm.style.display = "none";
const deleteBtn = card.querySelector(".delete");
deleteBtn.addEventListener("click", function () {
card.remove(); // حذف الكرت

})
 // done button 
const done = card.querySelector(".done")
done.addEventListener("change", function () {
  if (this.checked) {
    card.style.backgroundColor = "lightgreen"
    card.style.opacity = "0.7"
    card.style.textDecoration = "line-through";
    card.style.opacity = "0.8"
    card.style.scale = "0.99"
  } else {
    card.style.backgroundColor = "white"
    card.style.opacity = "1"
    card.style.textDecoration = "none";
    card.style.opacity = "1"
    card.style.scale = "1"

    
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
