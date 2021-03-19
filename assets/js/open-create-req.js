document.addEventListener('DOMContentLoaded', e => {
    function openWrapper(e)
    {
        console.log('Кнопка', e.currentTarget);

        console.log('Удаляем слушатель');
        e.currentTarget.removeEventListener('click', openWrapper, true);
        e.currentTarget.textContent = 'Закрыть создание заявки';
        e.currentTarget.addEventListener('click', closeWrapper, true);
        
        wrapperElem.style.padding = '15px 25px';
        wrapperElem.style.border = '1px solid #111';

        wrapperElem.style.minHeight = 'max-content';
        wrapperElem.style.maxHeight = 'max-content';
    }

    function closeWrapper(e)
    {
        wrapperElem.style.padding = '0';
        wrapperElem.style.border = 'none';

        wrapperElem.style.minHeight = '0';
        wrapperElem.style.maxHeight = '0';
        
        e.currentTarget.removeEventListener('click', closeWrapper, true);
        e.currentTarget.textContent = 'Создать заявку';
        e.currentTarget.addEventListener('click', openWrapper, true);
    }

    const wrapperElem = document.getElementById('create-wrapper');
    const openButton = document.getElementById('create-request');

    openButton.addEventListener('click', openWrapper, true);
})