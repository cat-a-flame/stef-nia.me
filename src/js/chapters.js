document.addEventListener('DOMContentLoaded', function () {
  const chapters = document.querySelectorAll('article h2');
  const sidebar = document.getElementById('chapterSidebar');

  chapters.forEach((chapter, index) => {
    const chapterId = chapter.getAttribute('id') || `chapter-${index + 1}`;
    chapter.setAttribute('id', chapterId)
    const listItem = document.createElement('li');
    const link = document.createElement('a');
    link.setAttribute('href', `#${chapterId}`);
    link.setAttribute('id', `link-${chapterId}`);
    link.textContent = chapter.textContent;
    listItem.appendChild(link);
    sidebar.appendChild(listItem);
  });

  const links = document.querySelectorAll('.sidebar a');

  function handleScroll() {
    let closestChapterIndex = 0;
    let closestDistance = Number.POSITIVE_INFINITY;

    chapters.forEach((chapter, index) => {
      const rect = chapter.getBoundingClientRect();
      const distanceFromTop = Math.abs(rect.top);

      if (distanceFromTop < closestDistance) {
        closestDistance = distanceFromTop;
        closestChapterIndex = index;
      }
    });

    links.forEach(link => link.classList.remove('active'));
    links[closestChapterIndex].classList.add('active');
  }

  document.addEventListener('scroll', handleScroll);
  handleScroll();
});
