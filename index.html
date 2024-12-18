<html><head><base href=".">
    <title>Monster Energy Tracker</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
    :root {
        --monster-green: #28641c;
        --monster-dark: #1b1b1b;
        --monster-black: #000000;
        --monster-white: #ffffff;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
    }
    
    body {
        background: var(--monster-black);
        color: var(--monster-white);
        min-height: 100vh;
        padding: 20px;
        overflow-x: hidden;
    }
    
    .container {
        max-width: 800px;
        margin: 0 auto;
    }
    
    .header {
        width: 100%;
        text-align: center;
        margin-bottom: 2rem;
        animation: energyPulse 2s infinite;
        
    }
    
    @keyframes energyPulse {
        0% { text-shadow: 0 0 10px var(--monster-green); }
        50% { text-shadow: 0 0 20px var(--monster-green), 0 0 30px var(--monster-green), 0 0 40px var(--monster-green);; }
        100% { text-shadow: 0 0 10px var(--monster-green); }
    }

    @font-face {
        font-family: 'GreenEnergy';
        src: url('Fonts/Green_Energy.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    
    h1 {
        font-family: 'GreenEnergy', sans-serif;
        font-size: 5rem;
        background: linear-gradient(45deg, var(--monster-green), var(--monster-white));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 1rem;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
    
    .header p {
        font-size: 1.2rem;
        color: var(--monster-green);
        text-transform: uppercase;
        letter-spacing: 1.5px;
        opacity: 0.9;
        position: relative;
        display: inline-block;
        padding: 0 10px;
    }
    
    .header p::before,
    .header p::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 30px;
        height: 2px;
        background: var(--monster-green);
        transform: translateY(-50%);
    }
    
    .header p::before {
        left: -35px;
    }
    
    .header p::after {
        right: -35px;
    }
    
    @keyframes glowPulse {
        0% { text-shadow: 0 0 5px var(--monster-green); }
        50% { text-shadow: 0 0 10px var(--monster-green); }
        100% { text-shadow: 0 0 5px var(--monster-green); }
    }
    
    .header p {
        animation: glowPulse 2s infinite;
    }
    
    .button-container {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-bottom: 2rem;
    }
    
    .btn {
        padding: 1rem 2rem;
        border: none;
        border-radius: 50px;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
    }
    
    .btn-primary {
        background: var(--monster-green);
        color: var(--monster-white);
        box-shadow: 0 0 15px var(--monster-green);
    }
    
    .btn-secondary {
        background: var(--monster-dark);
        color: var(--monster-white);
        border: 2px solid var(--monster-green);
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 0 25px var(--monster-green);
    }
    
    .btn:active {
        transform: translateY(1px);
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
        margin-bottom: 2rem;
    }
    
    .stat-card {
        background: var(--monster-dark);
        padding: 1.5rem;
        border-radius: 15px;
        border: 1px solid rgba(40, 100, 28, 0.2);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent, rgba(40, 100, 28, 0.1));
        transform: translateX(-100%);
        transition: transform 0.6s ease;
    }
    
    .stat-card:hover::before {
        transform: translateX(100%);
    }
    
    .stat-card h3 {
        color: var(--monster-green);
        margin-bottom: 0.5rem;
    }
    
    .stat-card p {
        font-size: 2rem;
        font-weight: bold;
    }
    
    .chart-container {
        background: linear-gradient(to bottom, rgba(40, 100, 28, 0.05), var(--monster-dark));
        padding: 1.5rem;
        border-radius: 15px;
        border: 1px solid rgba(40, 100, 28, 0.2);
        margin-bottom: 1rem;
        height: 300px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(40, 100, 28, 0.1);
        transition: all 0.3s ease;
    }
    
    .chart-container:hover {
        transform: translateY(-2px);
        box-shadow: 0 0 25px rgba(40, 100, 28, 0.2);
    }
    
    .view-controls {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
        align-items: center;
    }
    
    .dropdown {
        background: var(--monster-dark);
        border: 1px solid var(--monster-green);
        color: var(--monster-white);
        padding: 0.5rem 1rem;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .date-picker {
        background: var(--monster-dark);
        border: 1px solid var(--monster-green);
        color: var(--monster-white);
        padding: 0.8rem 1.2rem;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1rem;
        transition: all 0.3s ease;
        width: 200px;
    }
    
    .date-picker:hover {
        border-color: var(--monster-white);
        box-shadow: 0 0 15px rgba(40, 100, 28, 0.2);
    }
    
    .goals-section {
        background: var(--monster-dark);
        padding: 1.5rem;
        border-radius: 15px;
        margin-top: 2rem;
        border: 1px solid rgba(40, 100, 28, 0.2);
        transition: all 0.3s ease;
    }
    
    .goals-section:hover {
        box-shadow: 0 0 15px rgba(40, 100, 28, 0.2);
    }
    
    .goals-section h2 {
        color: var(--monster-green);
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .goal-input {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }
    
    .goal-input input {
        flex: 1;
        min-width: 200px;
        background: var(--monster-black);
        border: 2px solid var(--monster-green);
        color: var(--monster-white);
        padding: 0.8rem 1rem;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .goal-input input:focus {
        outline: none;
        box-shadow: 0 0 10px rgba(40, 100, 28, 0.3);
    }
    
    #goalStatus {
        padding: 1rem;
        border-radius: 8px;
        background: rgba(40, 100, 28, 0.1);
        margin-top: 1rem;
        text-align: center;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }
    
    .goal-progress {
        margin-top: 1rem;
        background: var(--monster-black);
        height: 10px;
        border-radius: 5px;
        overflow: hidden;
    }
    
    .goal-progress-bar {
        height: 100%;
        background: var(--monster-green);
        transition: width 0.5s ease;
    }
    
    .goal-details {
        margin-top: 1rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
    }
    
    .goal-detail-item {
        text-align: center;
        padding: 0.5rem;
    }
    
    .goal-detail-item span {
        color: var(--monster-green);
        font-weight: bold;
    }
    
    .trends-card {
        background: var(--monster-dark);
        padding: 1.5rem;
        border-radius: 15px;
        margin-top: 2rem;
        
    }
    
    .tooltip {
        position: absolute;
        background: rgba(27, 27, 27, 0.95);
        color: var(--monster-white);
        padding: 12px 16px;
        border: 2px solid var(--monster-green);
        box-shadow: 0 0 15px rgba(40, 100, 28, 0.2);
        font-size: 0.9rem;
        font-weight: bold;
        z-index: 1000;
        backdrop-filter: blur(5px);
    }
    
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    @keyframes energyBurst {
        0% { transform: scale(0); opacity: 0; }
        50% { transform: scale(1.2); opacity: 0.8; }
        100% { transform: scale(1); opacity: 1; }
    }
    
    .stat-value {
        animation: energyBurst 0.5s ease-out;
    }
    
    @media (max-width: 600px) {
        .button-container {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
        }
        
        .stat-card {
            margin-bottom: 1rem;
        }
    }
    
    /* Flatpickr custom styling */
    .flatpickr-calendar {
        background: var(--monster-dark) !important;
        border: 2px solid var(--monster-green) !important;
        box-shadow: 0 0 20px rgba(40, 100, 28, 0.2) !important;
    }
    
    .flatpickr-months .flatpickr-month {
        background: var(--monster-dark) !important;
        color: var(--monster-white) !important;
    }
    
    .flatpickr-current-month .flatpickr-monthDropdown-months {
        background: var(--monster-dark) !important;
        color: var(--monster-white) !important;
    }
    
    .flatpickr-months .flatpickr-prev-month, 
    .flatpickr-months .flatpickr-next-month {
        color: var(--monster-green) !important;
        fill: var(--monster-green) !important;
    }
    
    .flatpickr-day {
        color: var(--monster-white) !important;
        background: transparent !important;
    }
    
    .flatpickr-day.selected {
        background: var(--monster-green) !important;
        border-color: var(--monster-green) !important;
    }
    
    .flatpickr-day:hover {
        background: rgba(40, 100, 28, 0.3) !important;
    }
    
    .flatpickr-monthDropdown-months option {
        background: var(--monster-dark);
    }
    </style>
    </head>
    <body>
    <div class="container">
        <header class="header">
            <h1>Monster Energy Tracker</h1>
            <p>Advanced Analytics &amp; Performance Tracking</p>
        </header>
        
        <div class="button-container">
            <button class="btn btn-primary" id="addMonster">Add Monster</button>
            <button class="btn btn-secondary" id="removeMonster">Remove Monster</button>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card">
                <h3>Today's Count</h3>
                <p id="todayCount" class="stat-value">0</p>
            </div>
            <div class="stat-card">
                <h3>All-Time Total</h3>
                <p id="allTimeTotal" class="stat-value">0</p>
            </div>
            <div class="stat-card">
                <h3>Average/Day</h3>
                <p id="averagePerDay" class="stat-value">0</p>
            </div>
        </div>
        
        <div class="view-controls">
            <select id="viewType" class="dropdown">
                <option value="weekly">Weekly View</option>
                <option value="monthly">Monthly View</option>
                <option value="yearly">Yearly View</option>
            </select>
            <input type="text" id="datePicker" class="date-picker" placeholder="Select date range">
        </div>
        
        <div class="chart-container">
            <canvas id="consumptionChart"></canvas>
            <div id="chartTooltip" class="tooltip"></div>
        </div>
    
        <div class="goals-section">
            <h2>Consumption Goals</h2>
            <div class="goal-input">
                <input type="number" id="weeklyGoal" placeholder="Set weekly drink limit" min="1">
                <button class="btn btn-secondary" id="setGoal">Set Goal</button>
            </div>
            <div class="goal-progress">
                <div class="goal-progress-bar" id="goalProgressBar"></div>
            </div>
            <p id="goalStatus"></p>
            <div class="goal-details">
                <div class="goal-detail-item">
                    <p>Current Week: <span id="currentWeekCount">0</span></p>
                </div>
                <div class="goal-detail-item">
                    <p>Goal: <span id="weeklyGoalDisplay">Not Set</span></p>
                </div>
                <div class="goal-detail-item">
                    <p>Days Left: <span id="daysLeft">7</span></p>
                </div>
            </div>
        </div>
    
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
    <script>
    const state = {
        todayCount: 0,
        weeklyData: [0, 0, 0, 0, 0, 0, 0],
        monthlyData: Array(30).fill(0),
        yearlyData: Array(12).fill(0),
        allTimeTotal: 0,
        weeklyGoal: 0,
        consumptionHistory: [],
        currentView: 'weekly'
    };

    document.getElementById('setGoal').addEventListener('click', () => {
        const goalInput = document.getElementById('weeklyGoal');
        const newGoal = parseInt(goalInput.value);

        if (isNaN(newGoal) || newGoal <= 0) {
            alert("Please enter a valid goal greater than 0.");
            return;
        }

        state.weeklyGoal = newGoal; // Almacena el objetivo en el estado
        goalInput.value = ""; // Limpia el campo de entrada

        updateGoalProgress(); // Actualiza la barra de progreso y el estado
    });
    
    flatpickr("#datePicker", {
        mode: "single",
        dateFormat: "F Y",
        enableTime: false,
        defaultDate: new Date(),
        locale: {
            monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        onOpen: function(selectedDates, dateStr, instance) {
            if (state.currentView === 'monthly') {
                instance.set('dateFormat', 'F Y');
                instance.redraw();
            } else if (state.currentView === 'yearly') {
                instance.set('dateFormat', 'Y');
                instance.redraw();
            }
        },
        onChange: function(selectedDates) {
            if (selectedDates[0]) {
                updateChartWithSelectedDate(selectedDates[0]);
            }
        },
        onReady: function(selectedDates, dateStr, instance) {
            // Initial update with current date
            updateChartWithSelectedDate(new Date());
        }
    });
    
    // Add new function to handle date-based updates
    function updateChartWithSelectedDate(selectedDate) {
        const year = selectedDate.getFullYear();
        const month = selectedDate.getMonth();
        
        if (state.currentView === 'monthly') {
            // Get days in selected month
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            state.monthlyData = Array(daysInMonth).fill(0);
            
            // Fill with actual consumption data
            state.consumptionHistory.forEach(entry => {
                const entryDate = new Date(entry.date);
                if (entryDate.getMonth() === month && entryDate.getFullYear() === year) {
                    state.monthlyData[entryDate.getDate() - 1] += entry.count;
                }
            });
        } else if (state.currentView === 'yearly') {
            state.yearlyData = Array(12).fill(0);
            
            // Fill with actual yearly data
            state.consumptionHistory.forEach(entry => {
                const entryDate = new Date(entry.date);
                if (entryDate.getFullYear() === year) {
                    state.yearlyData[entryDate.getMonth()] += entry.count;
                }
            });
        }
        
        updateChart();
    }
    
    // Modify the updateChart function to handle the new date-based display
    function updateChart(isRemoving = false) {
    const ctx = document.getElementById('consumptionChart').getContext('2d');

    let chartData;
    let labels;

    switch (state.currentView) {
        case 'weekly':
            chartData = state.weeklyData;
            labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
            break;
        case 'monthly':
            chartData = state.monthlyData;
            labels = Array.from({ length: state.monthlyData.length }, (_, i) => i + 1);
            break;
        case 'yearly':
            chartData = state.yearlyData;
            labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
                      'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            break;
    }

    const animationConfig = {
        duration: 1500,
        easing: isRemoving ? 'easeOutQuart' : 'easeInOutQuart', // Efecto según acción
    };

    if (!window.myChart) {
        // Inicialización del gráfico si no existe aún
        window.myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Consumption',
                        data: chartData,
                        borderColor: '#28641c',
                        borderWidth: 3,
                        tension: 0.4,
                        fill: true,
                        backgroundColor: 'rgba(40, 100, 28, 0.1)',
                        pointBackgroundColor: '#28641c',
                        pointBorderColor: '#ffffff',
                        pointHoverRadius: 8,
                        pointHoverBackgroundColor: '#28641c',
                        pointHoverBorderColor: '#ffffff',
                        pointHoverBorderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: animationConfig,
                    interaction: {
                        intersect: false,
                        mode: 'nearest',
                        axis: 'x'
                    },
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            enabled: false,
                            external: function (context) {
                                const tooltip = document.getElementById('chartTooltip');
                                if (context.tooltip.opacity === 0) {
                                    tooltip.style.opacity = 0;
                                    return;
                                }

                                const dataPoint = context.tooltip.dataPoints[0];
                                const date = labels[dataPoint.dataIndex];
                                const value = dataPoint.raw;

                                tooltip.style.opacity = 1;
                                tooltip.style.left = context.tooltip.caretX + 'px';
                                tooltip.style.top = context.tooltip.caretY + 'px';

                                let dateLabel = '';
                                const selectedDate = document.querySelector('#datePicker')._flatpickr.selectedDates[0];

                                switch (state.currentView) {
                                    case 'weekly':
                                        dateLabel = `${date}`;
                                        break;
                                    case 'monthly':
                                        dateLabel = `${selectedDate.toLocaleString('default', { month: 'long' })} ${date}`;
                                        break;
                                    case 'yearly':
                                        dateLabel = `${date} ${selectedDate.getFullYear()}`;
                                        break;
                                }

                                tooltip.innerHTML = `
                                    <div style="font-size: 0.8rem; color: #28641c;">${dateLabel}</div>
                                    <div style="font-size: 1.1rem; margin-top: 4px;">${value} drinks</div>
                                `;
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            suggestedMax: 5,
                            grid: {
                                color: 'rgba(40, 100, 28, 0.1)',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#ffffff',
                                padding: 10,
                                font: { size: 12 },
                                callback: function (value) {
                                    return Math.floor(value); // Elimina los decimales
                                }
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(40, 100, 28, 0.1)',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#ffffff',
                                padding: 10,
                                font: { size: 12 }
                            }
                        }
                    },
                    elements: {
                        line: { borderWidth: 3 },
                        point: {
                            radius: 4,
                            hitRadius: 10,
                            hoverRadius: 6
                        }
                    }
                }
            });
        } else {
            // Actualización de los datos y la animación
            window.myChart.data.labels = labels; // Actualiza las etiquetas
            window.myChart.data.datasets[0].data = chartData; // Actualiza los datos
            window.myChart.options.animation = animationConfig; // Actualiza la configuración de animación
            window.myChart.update(); // Refresca el gráfico
        }
    }

    
    // Update the view type change handler
    document.getElementById('viewType').addEventListener('change', (e) => {
        state.currentView = e.target.value;
        const datePicker = document.querySelector('#datePicker')._flatpickr;
        
        // Reset date picker based on view
        if (state.currentView === 'monthly') {
            datePicker.set('dateFormat', 'F Y');
        } else if (state.currentView === 'yearly') {
            datePicker.set('dateFormat', 'Y');
        }
        
        // Trigger update with current selected date
        if (datePicker.selectedDates[0]) {
            updateChartWithSelectedDate(datePicker.selectedDates[0]);
        }
    });
    
    function updateStats() {
    // Actualiza las estadísticas generales
        document.getElementById('todayCount').innerText = state.todayCount;
        document.getElementById('allTimeTotal').innerText = state.allTimeTotal;

        // Cálculo del promedio diario
        const daysWithData = state.consumptionHistory.reduce((uniqueDays, entry) => {
            const date = new Date(entry.date).toDateString();
            uniqueDays.add(date);
            return uniqueDays;
        }, new Set()).size;

        const averagePerDay = daysWithData > 0 ? (state.allTimeTotal / daysWithData).toFixed(2) : 0;

        // Actualiza el elemento del DOM
        document.getElementById('averagePerDay').innerText = averagePerDay;
    }

    function createRipple(e) {
    // Función vacía temporalmente para evitar errores
    }

    function triggerConfetti() {
        // Activar el confeti
        confetti({
            particleCount: 200,
            angle: 90,
            spread: 150,
            origin: { x: 0.5, y: 0.5 },  // Centrado en la pantalla
            colors: ['#ff0', '#0f0', '#00f', '#f00', '#ff00ff']
        });
    }

    function displayCelebrationMessage() {
        // Crear un mensaje de celebración dinámicamente
        const messageContainer = document.createElement('div');
        messageContainer.id = 'celebrationMessage';
        messageContainer.style.position = 'fixed';
        messageContainer.style.top = '50%';
        messageContainer.style.left = '50%';
        messageContainer.style.transform = 'translate(-50%, -50%)';
        messageContainer.style.padding = '20px';
        messageContainer.style.backgroundColor = 'rgb(33, 99, 23)';
        messageContainer.style.color = '#fff';
        messageContainer.style.fontSize = '1.5rem';
        messageContainer.style.fontFamily = 'Inter, sans-serif';
        messageContainer.style.fontWeight = '100';
        messageContainer.style.borderRadius = '15px';
        messageContainer.style.textAlign = 'center';
        messageContainer.style.boxShadow = '0 0 15px rgb(71, 71, 71)';
        messageContainer.innerHTML = "🎉 FELICIDADES!!<br>A generar más piedra en los riñones 🎉";

        // Agregar el mensaje al DOM
        document.body.appendChild(messageContainer);

        // Eliminar el mensaje después de 5 segundos
        setTimeout(() => {
            messageContainer.style.transition = 'opacity 1s';
            messageContainer.style.opacity = 0;
            setTimeout(() => document.body.removeChild(messageContainer), 1000);
        }, 5000);
    }

    function updateGoalProgress() {
        const currentWeekCount = state.weeklyData.reduce((sum, day) => sum + day, 0); // Total de la semana actual
        const goal = state.weeklyGoal;

        // Actualiza la barra de progreso
        const progressPercentage = goal > 0 ? Math.min((currentWeekCount / goal) * 100, 100) : 0;
        document.getElementById('goalProgressBar').style.width = `${progressPercentage}%`;

        // Actualiza el estado del objetivo
        let statusText = "";
        if (goal === 0) {
            statusText = "Goal not set. Set your weekly goal!";
        } else if (currentWeekCount >= goal) {
            statusText = "Goal reached! Great job!";
            triggerConfetti(); // Llamada para generar confeti
            displayCelebrationMessage(); // Muestra el mensaje de celebración
        } else {
            const remaining = goal - currentWeekCount;
            statusText = `${remaining} drinks left to reach your goal this week.`;
        }
        document.getElementById('goalStatus').innerText = statusText;

        // Actualiza el DOM
        document.getElementById('currentWeekCount').innerText = currentWeekCount;
        document.getElementById('weeklyGoalDisplay').innerText = goal > 0 ? goal : "Not Set";
    }



    document.getElementById('addMonster').addEventListener('click', (e) => {
        createRipple(e);

        const today = (new Date().getDay() + 6) % 7;
        const todayDate = new Date().getDate() - 1;
        const thisMonth = new Date().getMonth();

        state.todayCount++;
        state.allTimeTotal++;
        state.weeklyData[today] += 1;
        state.monthlyData[todayDate] += 1;
        state.yearlyData[thisMonth] += 1;
        
        state.consumptionHistory.push({
            date: new Date().toISOString(),
            count: 1
        });

        updateStats();
        updateChart(false);
        updateGoalProgress();
    });
    
    document.getElementById('removeMonster').addEventListener('click', (e) => {
        createRipple(e);
        if (state.todayCount > 0) {
            const today = (new Date().getDay() + 6) % 7; // Ajustar para que Lunes sea 0
            const todayDate = new Date().getDate() - 1;
            const thisMonth = new Date().getMonth();

            state.todayCount--;
            state.allTimeTotal--;
            state.weeklyData[today] -= 1;
            state.monthlyData[todayDate] -= 1;
            state.yearlyData[thisMonth] -= 1;
            
            if (state.consumptionHistory.length > 0) {
                state.consumptionHistory.pop();
            }
            
            updateStats();
            updateChart(true);
            updateGoalProgress();
        }
    });
    </script>
    </body></html>