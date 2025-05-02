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

  taskContainer.appendChild(card);

  // document.getElementById("taskTitle").value = "";
  // document.getElementById("taskDescription").value = "";

  // إخفاء الفورم من جديد (اختياري)
  taskForm.style.display = "none";
});

card.querySelector(".delete").addEventListener("click", () => {
  card.remove()
})
