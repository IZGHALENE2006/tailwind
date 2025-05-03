const addTaskBtn = document.getElementById("addTaskBtn");
const taskForm = document.getElementById("taskForm");
const taskContainer = document.getElementById("taskContainer");

addTaskBtn.addEventListener("click", () => {
  // إظهار أو إخفاء الفورم
  taskForm.style.display = taskForm.style.display === "none" ? "block" : "none";
});

taskForm.addEventListener("submit", function (e) {
  e.preventDefault(); // منع إعادة تحميل الصفحة

  // جلب القيم الحالية من الحقول
  const title = document.getElementById("taskTitle").value;
  const description = document.getElementById("taskDescription").value;

  // إنشاء عنصر كرت المهمة
  const card = document.createElement("div");
  card.className = "task-card";
  card.innerHTML = `
    <h1>${title}</h1>
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
