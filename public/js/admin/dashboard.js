document.addEventListener('DOMContentLoaded', () => {
    const ctxUsersRoot = document.querySelector('.js-users-root-chart')
    new Chart(ctxUsersRoot, {
        type: 'pie',
        data: {
            labels: ['Коренные жители', 'Приезжие'],
            datasets: [{
                label: '# of users',
                data: [ctxUsersRoot.dataset.root, ctxUsersRoot.dataset.nonRoot],
                backgroundColor: [
                    '#f1be44',
                    '#4f7fc0',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Пользователи по статусу коренного жителя'
                }
            }
        },
    })

    const ctxUsersSex = document.querySelector('.js-users-sex-chart')
    new Chart(ctxUsersSex, {
        type: 'pie',
        data: {
            labels: ['Мужчины', 'Женщины', 'Нет данных'],
            datasets: [{
                label: '# пользователей',
                data: [
                    ctxUsersSex.dataset.man,
                    ctxUsersSex.dataset.woman,
                    ctxUsersSex.dataset.undefined],
                backgroundColor: [
                    '#f1be44',
                    '#4f7fc0',
                    '#53705b',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Пользователи по полу'
                }
            }
        },
    })

    const ctxUsersRegister = document.querySelector('.js-users-registers-chart')
    let registrationRowData = JSON.parse(ctxUsersRegister.dataset.users)
    const registrationDynamic = Object.keys(registrationRowData).map((key) => {
        return {
            x: key,
            y: registrationRowData[key]
        }
    })
    let i = 0;
    const registrationCount = Object.keys(registrationRowData).map((key) => {
        i += registrationRowData[key]
        return {
            x: key,
            y: i
        }
    })
    window.foo = new Chart(ctxUsersRegister, {
        type: 'line',
        data: {
            labels: Object.keys(registrationRowData),
            datasets: [
                {
                    label: 'Динамика регистраций',
                    data: registrationDynamic,
                    borderColor: '#53705b',
                },
                {
                    label: 'Количество пользователей',
                    data: registrationCount,
                    borderColor: '#f1be44',
                },
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Регистрации пользователей'
                }
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Дата'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Количество'
                    }
                }]
            }
        },
    })
})
