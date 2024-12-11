const h1 = document.querySelector('footer');
const observeh1 = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
        //  alert('h1 is in the viewport!');
          entry.target.style.opacity = '1';
          entry.target.style.transform='translateY(0)';
     
        } else {
         // alert('h1 is out of the viewport!');
          entry.target.style.opacity = '1';
          entry.target.style.transform='translateY(400px)';
          entry.target.style.fontSize = 'unset';
        }
      });
    },
    {
      root: null,
      rootMargin: '0px',
      threshold: 0.5,
    }
  );
  
  observeh1.observe(h1);