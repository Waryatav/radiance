var valid = new Validation();

valid.init(
    {
        classItem: 'vItem',
        eventElement: '#subm',
        event:'onblur',
        ajax:true,
        ajaxUrl: vars.url,
        items: [
            {
                item:'v_login',
                promptMsg:'Напишите свой логин',
                successMsg:'Все верно',
                tpl:'kl',
                errorClass:'inputEr',
                successClass:'inputSc',
                errorMsgClass:'msgEr',
                promptMsgClass:'msgPt',
                successMsgClass:'msgSc'
            },
            {
                item:'v_name',
                promptMsg:'Напишите свое имя',
                successMsg:'Все верно',
                tpl:'kir',
                tplMsg: 'Только кириллица'
            },
            {
                item:'v_phone',
                promptMsg:'Напишите свой телефон',
                successMsg:'Все верно',
                tpl:'number',
                tplMsg: 'Только цифры'
            }
        ],
    }
)