{
  const $burger = document.querySelector(`.burger`);
  const $overlay = document.querySelector(`.overlay`);
  const $dropdown = document.querySelector(`.overlay_dropdown`);
  const $meerdok_ = document.querySelector(`.meerdok_dropdown`);

  const init = () => {
    console.log(`hello world`);

    $burger.addEventListener(`click`, clickHandler);
    $dropdown.addEventListener(`click`, showDropdown);

  };

  const clickHandler = () => {
    $burger.classList.toggle(`open`);
    $overlay.classList.toggle(`hidden`);
  };

  const showDropdown = () => {

    $meerdok_.classList.toggle(`hidden`);
  };

  init();
}
