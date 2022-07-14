
$('.rn__body-thumbnail-img').on('error', ({target},e) => {
    console.log(target)
    // target.setAttribute('src', '/assets/forum/images/default.jpg');
})

$(function () {
    $('a[href="#"]').on('click', function (e) {
        e.preventDefault()
    })

    // $('.navbar .line').css('left', $())
    $('.navbar .nav-link').on('click', function () {
        let ulRect = $(this).parent().parent()[0].getBoundingClientRect();
        let navLinkRect = $(this)[0].getBoundingClientRect();
        let line = $(this).parent().parent().children('.line');
        $('.navbar .nav-link').removeClass('active')
        $(this).addClass('active')
        $(this).parent().parent().children('.line').css('left', navLinkRect.left - ulRect.left + 'px').css('width', navLinkRect.width + 'px')
    })

    const dots = $('.dot');

    for (let dot of dots) {
        let color = getComputedStyle(dot).color;
        let fz = getComputedStyle(dot).fontSize;
        let circle = $(dot).find('circle');
        let svg = $(dot).children('svg');
        svg.attr('width', fz)
        svg.attr('height', fz)
        circle.attr('fill', color)
    }

    for (let e of $('.separate ~ .use-separate')) {
        let parentLeft = e.parentElement.getBoundingClientRect().left;
        let thisLeft = e.getBoundingClientRect().left;
        let paddingLeft = getComputedStyle(e).paddingLeft
        paddingLeft = Number(paddingLeft.replace('px', '')) * 2;
        $(e).parent().children('.separate').css('left', thisLeft - parentLeft - paddingLeft + 'px')
    }

    for (let tab of $('.tabs')) {
        if (tab.getAttribute('show-line')) {
            let line = document.createElement('li', { is: 'expanding-list' })
            line.classList.add('tabs__line');
            tab.appendChild(line);
            let item = tab.querySelector('.tabs__item.active');
            if (item) {
                let tabLeft = tab.getBoundingClientRect().left
                let itemLeft = item.getBoundingClientRect().left
                let itemWidth = item.getBoundingClientRect().width
                line.style = `left: ${itemLeft - tabLeft}px; width: ${itemWidth}px`;
            }

        }
    }
    $('.tabs .tabs__item').on('click', function () {
        if ($(this).parent().attr('show-line')) {
            let line = document.createElement('li', { is: 'expanding-list' })
            line.classList.add('tabs__line');
            $(this).parent()[0].appendChild(line)
            $(this).parent().children('.tabs__item').removeClass('active')
            $(this).addClass('active')
            let tabsLeft = $(this).parent('.tabs')[0].getBoundingClientRect().left;
            let tabsItemLeft = $(this)[0].getBoundingClientRect().left;
            $(this).parent().children('.tabs__line').css('left', tabsItemLeft - tabsLeft + 'px').css('width', $(this)[0].getBoundingClientRect().width)
        } else {
            $(this).parent().children('.tabs__line').remove();
        }
    })

})

function loaded() {
    // console.log(123)
}