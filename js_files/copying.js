document.querySelector('#phone_copy').addEventListener(
    'click',
    async (event) => {
      const code = event.target.innerText;
      await navigator.clipboard.writeText(code);
    }
  );
  
  document.querySelector('#email_copy').addEventListener(
    'click',
    async (event) => {
      const code = event.target.innerText;
      await navigator.clipboard.writeText(code);
    }
  );

  document.querySelector('#link_copy').addEventListener(
    'click',
    async (event) => {
      const code = event.target.innerText;
      await navigator.clipboard.writeText(code);
    }
  );