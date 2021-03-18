document.addEventListener('DOMContentLoaded', e => {
    function openWrapper(e, wrapperToOpen)
    {
        console.log(e.currentTarget);

        function closeWrapper(e, wrapper)
        {
            wrapper.style.padding = '0';
            wrapper.style.border = 'none';

            wrapper.style.minHeight = '0';
            wrapper.style.maxHeight = '0';

            e.currentTarget.textContent = 'Создать заявку';
            e.currentTarget.addEventListener('click', e => openWrapper(e, wrapper));
            e.currentTarget.removeEventListener('click', e => closeWrapper(e, wrapperToOpen));
        }

        e.currentTarget.removeEventListener('click', e => openWrapper(e, wrapper));
        e.currentTarget.textContent = 'Закрыть создание заявки';
        e.currentTarget.addEventListener('click', e => closeWrapper(e, wrapperToOpen));
        
        wrapper.style.padding = '15px 25px';
        wrapper.style.border = '1px solid #111';

        wrapperToOpen.style.minHeight = 'max-content';
        wrapperToOpen.style.maxHeight = 'max-content';
    }

    const wrapper = document.getElementById('create-wrapper');
    const openButton = document.getElementById('create-request');

    openButton.addEventListener('click', e => openWrapper(e, wrapper));
})