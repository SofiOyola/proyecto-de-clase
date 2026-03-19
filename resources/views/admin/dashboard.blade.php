@extends ('layout.admin')
@section('admin-content')
        <!-- ===== CONTENIDO PRINCIPAL ===== -->
        <main class="main-content">

            <!-- Bienvenida -->
            <section class="welcome-section">
                <div class="welcome-text">
                    <h2 class="welcome-title">Bienvenida al panel de administración 💗</h2>
                    <p class="welcome-sub">Administra tus peluches tejidos y sigue el crecimiento de tu tienda artesanal.</p>
                </div>
                <div class="welcome-decoration">🌸</div>
            </section>

            <!-- ===== KPI CARDS ===== -->
            <section class="kpi-grid">

                <div class="kpi-card kpi-pink">
                    <div class="kpi-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                    </div>
                    <div class="kpi-data">
                        <span class="kpi-number">{{ $totalProductos ?? 0 }}</span>
                        <span class="kpi-label">Productos publicados</span>
                    </div>
                </div>

                <div class="kpi-card kpi-lavender">
                    <div class="kpi-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <div class="kpi-data">
                        <span class="kpi-number">{{ $totalProductos ?? 0 }}</span>
                        <span class="kpi-label">Colecciones disponibles</span>
                    </div>
                </div>

                <div class="kpi-card kpi-peach">
                    <div class="kpi-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <div class="kpi-data">
                        <span class="kpi-number">$<?php echo isset($ventasTotales) ? number_format($ventasTotales, 0, ',', '.') : '90'; ?></span>
                        <span class="kpi-label">Envíos realizados este mes</span>
                    </div>
                </div>

                <div class="kpi-card kpi-mint">
                    <div class="kpi-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                    </div>
                    <div class="kpi-data">
                        <span class="kpi-number"><?php echo isset($productosMasVendidos) ? $productosMasVendidos : 'Totoro'; ?></span>
                        <span class="kpi-label">Más vendido del mes</span>
                    </div>
                </div>

            </section>

            <!-- ===== GRÁFICAS ===== -->
            <section class="charts-grid">

                <!-- Ventas mensuales -->
                <div class="chart-card chart-large">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Ventas mensuales</h3>
                            <p class="card-subtitle">Seguimiento de ingresos por mes.</p>
                        </div>
                        <span class="card-badge">2025</span>
                    </div>
                    <div class="chart-container">
                        <canvas id="ventasChart"></canvas>
                    </div>
                </div>

                <!-- Mapa de visitas -->
                <div class="chart-card chart-small">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">Visitas por país</h3>
                            <p class="card-subtitle">Distribución geográfica</p>
                        </div>
                    </div>
                    <div class="chart-container chart-doughnut-container">
                        <canvas id="visitasChart"></canvas>
                    </div>
                    <ul class="country-legend">
                        <li><span class="legend-dot" style="background:#f9a8c9"></span> Colombia <strong>45%</strong></li>
                        <li><span class="legend-dot" style="background:#c8b5e8"></span> México <strong>22%</strong></li>
                        <li><span class="legend-dot" style="background:#fbc4ab"></span> Venezuela <strong>18%</strong></li>
                        <li><span class="legend-dot" style="background:#b5ead7"></span> Otros <strong>15%</strong></li>
                    </ul>
                </div>

            </section>

        </main>
    </div>

    <script>
        // ===== TOGGLE SIDEBAR MÓVIL =====
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            sidebar.classList.toggle('open');
            overlay.classList.toggle('active');
        }

        // ===== CHART: VENTAS MENSUALES =====
        const ctxVentas = document.getElementById('ventasChart').getContext('2d');

        const ventasData = <?php echo isset($ventasMensuales) ? json_encode($ventasMensuales) : json_encode([120000, 195000, 175000, 230000, 310000, 280000, 350000, 420000, 390000, 460000, 510000, 580000]); ?>;

        const gradient = ctxVentas.createLinearGradient(0, 0, 0, 280);
        gradient.addColorStop(0, 'rgba(249, 168, 201, 0.5)');
        gradient.addColorStop(1, 'rgba(249, 168, 201, 0.02)');

        new Chart(ctxVentas, {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                datasets: [{
                    label: 'Ventas ($)',
                    data: ventasData,
                    borderColor: '#e879a0',
                    backgroundColor: gradient,
                    borderWidth: 2.5,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#e879a0',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    fill: true,
                    tension: 0.45,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#fff',
                        titleColor: '#4a1e35',
                        bodyColor: '#7c4a63',
                        borderColor: '#f9d0e3',
                        borderWidth: 1,
                        padding: 12,
                        callbacks: {
                            label: ctx => ' $' + ctx.parsed.y.toLocaleString('es-CO')
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: { color: '#a77b95', font: { family: 'DM Sans', size: 12 } }
                    },
                    y: {
                        grid: { color: 'rgba(200,181,232,0.15)', drawBorder: false },
                        ticks: {
                            color: '#a77b95',
                            font: { family: 'DM Sans', size: 12 },
                            callback: v => '$' + (v / 1000) + 'k'
                        }
                    }
                }
            }
        });

        // ===== CHART: VISITAS POR PAÍS =====
        const ctxVisitas = document.getElementById('visitasChart').getContext('2d');

        const visitasData = <?php echo isset($visitasPorPais) ? json_encode(array_values($visitasPorPais)) : json_encode([45, 22, 18, 15]); ?>;

        new Chart(ctxVisitas, {
            type: 'doughnut',
            data: {
                labels: ['Colombia', 'México', 'Venezuela', 'Otros'],
                datasets: [{
                    data: visitasData,
                    backgroundColor: ['#f9a8c9', '#c8b5e8', '#fbc4ab', '#b5ead7'],
                    borderColor: '#fff',
                    borderWidth: 3,
                    hoverOffset: 6,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '68%',
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#fff',
                        titleColor: '#4a1e35',
                        bodyColor: '#7c4a63',
                        borderColor: '#f9d0e3',
                        borderWidth: 1,
                        padding: 10,
                        callbacks: {
                            label: ctx => ' ' + ctx.parsed + '%'
                        }
                    }
                }
            }
        });
    </script>
@endsection