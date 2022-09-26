const textContainer = document.querySelector("#tasks");
const submitButton = document.querySelector("#new-task-submit");

//the entire page is called a window, load means the page has loaded, however, we are using DOM content loaded which ensures that every content on the page finishes loading.

window.addEventListener("DOMContentLoaded", () => {
  const tasks = localStorage.getItem("tasks");
  const tasksArr = JSON.parse(tasks);

  tasksArr.forEach((task) => {
    createTask(task);
  });
});
submitButton.addEventListener("click", (event) => {
  event.preventDefault();

  const inputBar = document.querySelector("#new-task-input");
  createTask(inputBar.value);
  saveData();

  inputBar.value = " ";
});

const createTask = (taskData) => {
  const task = document.createElement("div");
  const content = document.createElement("div");
  const actions = document.createElement("div");

  content.setAttribute("class", "content");
  actions.setAttribute("class", "actions");
  task.setAttribute("class", "task");

  const text = document.createElement("input");
  text.setAttribute("type", "text");
  text.setAttribute("class", "text");
  text.setAttribute("value", taskData);
  text.setAttribute("readonly", "readonly");

  const edit = document.createElement("button");
  const done = document.createElement("button");
  const deleteButton = document.createElement("button");
  // Making the Edit button editable and saveable//
  edit.setAttribute("class", "edit");
  edit.textContent = "edit";
  edit.addEventListener("click", () => {
    if (edit.textContent === "edit") {
      edit.textContent = "save";
      text.removeAttribute("readonly");
    } else {
      edit.textContent = "edit";
      text.removeAttribute("readonly", "readonly");
      saveData();
    }
  });
  done.setAttribute("class", "done");
  done.textContent = "done";
  done.addEventListener("click", () => {
    if (done.textContent == "done") {
      done.textContent = "undone";
      text.addAttribute("strike");
    }
    // textContainer.appendChild(strike)
    saveData();
  });

  deleteButton.setAttribute("class", "delete");
  edit.textContent = "edit";
  deleteButton.textContent = "delete";

  deleteButton.addEventListener("click", () => {
    textContainer.removeChild(task);
    saveData();
  });

  content.appendChild(text);
  actions.appendChild(edit);
  actions.appendChild(done);
  actions.appendChild(deleteButton);
  task.appendChild(content);
  task.appendChild(actions);
  textContainer.appendChild(task);
  text.appendChild(strike);

  //To replace the placeholder once you add data//

  // console.log(textContainer)
};
const saveData = () => {
  const tasks = document.querySelectorAll(".task"); //  containing each of the tasks

  // const strike = document.querySelector(".strike");

  const taskArr = [];
  tasks.forEach((task) => {
    // Because the text content is in the input element//
    const input = task.querySelector("input");
    taskArr.push(input.value);
  });
  localStorage.setItem("tasks", JSON.stringify(taskArr));
};
