function addTask() {
    var taskInput = document.getElementById('taskInput');
    var taskDescription = taskInput.value.trim();
    if (taskDescription !== '') {
      var listItem = document.createElement('li');
      listItem.textContent = taskDescription;
      document.getElementById('taskList').appendChild(listItem);
      taskInput.value = '';
    }
  }
  