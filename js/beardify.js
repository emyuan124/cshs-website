const position = { x: 0, y: 0 }

function changeTeacher(teacher) {
    document.getElementById('teacher_img').src = `img/beardify/${teacher}.avif`;
    document.getElementById('current_teacher').src = `img/beardify/${teacher}.avif`;
    if (window.innerWidth < 1024) {
      document.getElementById('teachers').style.display = "none";
    }
}

function changeBeard(beard) {
    document.getElementById('beard_img').src = `img/beardify/${beard}.avif`;
    document.getElementById('current_beard').src = `img/beardify/${beard}.avif`;
    if (window.innerWidth < 1024) {
      document.getElementById('beards').style.display = "none";
    }
}

interact('.resize-drag')
  .resizable({
    edges: { top: true, left: true, bottom: true, right: true },
    listeners: {
      move: function (event) {
        let { x, y } = position

        x = (parseFloat(x) || 0) + event.deltaRect.left
        y = (parseFloat(y) || 0) + event.deltaRect.top

        Object.assign(event.target.style, {
          width: `${event.rect.width}px`,
          height: `${event.rect.height}px`,
          transform: `translate(${x}px, ${y}px)`
        })

        Object.assign(event.target.dataset, { x, y })
      }
    }
  })
  .draggable({
    listeners: {
        move (event) {
          position.x += event.dx
          position.y += event.dy
    
          event.target.style.transform =
            `translate(${position.x}px, ${position.y}px)`
        },
    }
  })

function showMenu(menu_name) {
  menu = document.getElementById(menu_name);
  menu.style.display = 'block';
}

function removeMenu(el) {
  el.parentNode.style.display = "none";
}