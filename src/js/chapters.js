document.addEventListener("DOMContentLoaded", function() {
    const chapters = document.querySelectorAll('article h2');
    const sidebar = document.getElementById('chapterSidebar');
  
    chapters.forEach((chapter, index) => {
      const listItem = document.createElement('li');
      listItem.textContent = chapter.textContent;
      //listItem.dataset.target = `chapter-${index}`;
      sidebar.appendChild(listItem);
  
      // Add an id to each chapter for easy reference
      //chapter.id = `chapter-${index}`;
    });
  
    const sidebarItems = sidebar.querySelectorAll('li');
  });
  