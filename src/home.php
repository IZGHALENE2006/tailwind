<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="button_done.css">
<style>
  #task{
    display: flex;
    justify-content: center;
    align-items: center;
  }
    #What_task{
      text-align: center;
      font-size: 25px;      
      font-family: Arial, Helvetica, sans-serif;
    }
    #submite{
      background-color: #ffc30e;
      width: 150px;
      margin: auto;
      margin-top: 40px;
    }
    #submite:hover{
      scale: 1.1;
      box-shadow: 0px 7px 30px #ffc30e;
      cursor: pointer;

    }
/* #addTaskBtn {
      background-color: #3b82f6;
      color: white;
      font-weight: bold;
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-bottom: 20px;
      box-sizing: border-box;
    } */

    #taskForm {
      background-color: white;
      border: rgb(229, 198, 0) 2px solid;
      border-radius: 25px;
      box-shadow: 0 6px 10px rgba(214, 162, 5, 0.458);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 450px;
      height: 450px;
      display: none;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 20px;
      padding-bottom: 80px;
      position: relative;
    


    }
    input, textarea {
      display: block;
      width: 100%;
      margin-top: 20px;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      max-height: 80px;

    }
    .task-card {
      margin-left: 30px;
      margin-right: 30px;
      background-color: white;
      padding: 20px;
      border-radius: 25px;
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      margin-top: 20px;
      transition: 0.6s;
      
    }
    .task-card:hover{
      background-color: rgb(229, 235, 181);
    }

    .task-card h1 {
      margin: 0 0 10px;
      font-family: serif;
      font-size: 30px;
    }

    .task-card p {
      margin: 0 0 15px;
    }
    .task-card .actions button {
      margin-right: 10px;
      padding: 6px 12px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .done {
      background-color: #25eb5a;
      color: white;
      transition: 0.4s;
    }
    .modify {
      background-color: #2563eb;
      color: white;
      transition: 0.4s;
    }
    .modify:hover{
      background-color: #103689;
    }

    .delete {
      background-color: #e12f2f;
      color: white;
      transition: 0.4s;
    }
    .delete:hover{
      background-color: #c50404;
      
    }
  .popup{
  display: flex;
  justify-content: center;
  align-items: center;
  }
  .form{
  position: absolute;
  z-index: 5;
  bottom: 50px;
  background-color: #1036894a;
  width: 420px;
  height: 600px;
  }

  #form_tasks{
    margin-top: 25px;
    scale: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  #title_and_time{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-weight: 200;
  }
  #span_time{
    color: rgba(0, 0, 0, 0.452);
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    margin-left: 22px;
  }
  #x{  
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
    color: #850000;
  }
  #x:hover{
    cursor: pointer;
    text-shadow: 0px 0px 15px rgb(247, 6, 6);
    transition: 0.2s;
    color: rgb(247, 6, 6);
    
  }
#taskmod{
  display: none;
}
</style>
</head>
<body  style="background-color: #f4f4f4;" >



    <header class="bg-amber-400 w-full h-30 space-y-5 flex flex-col justify-center shadow-lg shadow-amber-400" >
     <div class="text-center ">
       <h1 class="text-6xl cursor-pointer font-bold  "><span class="text-amber-700">Task</span>Flow</h1>
     </div>
     <div class="space-x-7 text-center">
        <a href="" class="font-sans  text-black hover:text-white transition-colors text-1x1" >Home</a>
       
     </div>
    </header>

    <div class="flex items-center ml-4 mt-3">
      <!-- <button class=" mt-2 ml-2 px-6 py-2 bg-blue-500 hover:bg-blue-700 text-white font-semibold rounded-xl shadow-md hover:shadow-lg transition-all duration-300 ease-in-out " >
        Add a new task
      </button> -->
      
<button
id="addTaskBtn"
  title="Add New"
  class="group cursor-pointer outline-none hover:rotate-90 duration-300"
>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="50px"
    height="50px"
    viewBox="0 0 24 24"
    class="stroke-orange-400 fill-none group-hover:fill-orange-800 group-active:stroke-green-200 group-active:fill-amber-600 group-active:duration-0 duration-300"
  >
    <path
      d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
      stroke-width="1.5"
    ></path>
    <path d="M8 12H16" stroke-width="1.5"></path>
    <path d="M12 16V8" stroke-width="1.5"></path>
  </svg>
</button>

       
    </div>
    <div id="task">

      <div id="taskForm">
        <div id="x">x</div>
        <div id="What_task" style="margin-top: 20px;">What's your task today?</div>
        <form id="form_tasks" action="file.php" method="post" class="modal-container-body rtf">
          <input type="text" id="taskTitle" placeholder="Task title" required name="title" class="
          mt-5">
          <textarea id="taskDescription" placeholder="Task description...(optional)" name="description"></textarea>
          <input type="time" id="tasktime" placeholder="Task title" required name="title" class="
          mt-5">
          <button type="submit" class="mt-2 px-6 py-2 text-white font-semibold rounded-xl shadow-md hover:shadow-lg transition-all duration-300 ease-in-out" name="submite" id="submite">Add Task</button>
          
        </form> 
      </div>
    </div>

    <main class="space-y-2.5  " >
     <div id="taskmod">
                  <button type="submit" class="mt-2 px-6 py-2 text-white font-semibold rounded-xl shadow-md hover:shadow-lg transition-all duration-300 ease-in-out bg-amber-300" name="submite" id="sub">save</button>

        <div id="What_task" style="margin-top: 20px;">modify to task </div>
        <form id="form_tasks" action="file.php" method="post" class="modal-container-body rtf">
          <input type="text" id="taskTitlemod" placeholder="Task title" required name="title" class="
          mt-5">
          <textarea id="taskDescriptionmod" placeholder="modify description" name="description"></textarea>
          <input type="time" id="tasktimemod" placeholder="modify title" required name="title" class="
          mt-5">
          
        </form> 
      </div>
      <div id="taskContainer" >
      
      </div>
    </main>

</body>
<script src="file.js"></script>
</html>