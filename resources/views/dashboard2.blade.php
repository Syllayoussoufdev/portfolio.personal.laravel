{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">$user->password = Hash::make('votre_nouveau_mot_de_passe');
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Vous etes Connecter au Dashbord 
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV Manager Dashboard</title>
</head>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; background: #f5f7fa; }
.sidebar { position: fixed; left: 0; top: 0; width: 260px; height: 100vh; background: #1e2a38; padding: 20px; overflow-y: auto; }
.logo { color: #4A90E2; font-size: 20px; font-weight: 500; margin-bottom: 32px; display: flex; align-items: center; gap: 8px; }
.nav-item { display: flex; align-items: center; gap: 12px; padding: 12px 16px; color: #a0aec0; border-radius: var(--border-radius-md); margin-bottom: 6px; cursor: pointer; transition: all 0.2s; }
.nav-item:hover { background: rgba(74, 144, 226, 0.1); color: #4A90E2; }
.nav-item.active { background: #4A90E2; color: white; }
.nav-section { font-size: 11px; text-transform: uppercase; color: #718096; margin: 24px 0 12px; font-weight: 500; letter-spacing: 0.5px; }
.main { margin-left: 260px; padding: 24px; }
.header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px; }
.header-left h1 { font-size: 28px; font-weight: 500; margin-bottom: 4px; }
.header-left p { color: var(--color-text-secondary); font-size: 14px; }
.header-right { display: flex; align-items: center; gap: 16px; }
.stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; margin-bottom: 32px; }
.stat-card { background: white; border-radius: var(--border-radius-lg); border: 0.5px solid var(--color-border-tertiary); padding: 20px; }
.stat-icon { width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 12px; }
.stat-label { font-size: 13px; color: var(--color-text-secondary); margin-bottom: 8px; }
.stat-value { font-size: 32px; font-weight: 500; margin-bottom: 8px; }
.stat-change { font-size: 13px; display: flex; align-items: center; gap: 4px; }
.card { background: white; border-radius: var(--border-radius-lg); border: 0.5px solid var(--color-border-tertiary); padding: 24px; margin-bottom: 24px; }
.card-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
.card-title { font-size: 18px; font-weight: 500; }
.btn { padding: 10px 20px; border-radius: var(--border-radius-md); border: 0.5px solid var(--color-border-secondary); background: transparent; cursor: pointer; font-size: 14px; font-weight: 500; transition: all 0.2s; }
.btn:hover { background: var(--color-background-secondary); }
.btn-primary { background: #4A90E2; color: white; border-color: #4A90E2; }
.btn-primary:hover { background: #3a7bc8; }
.badge { display: inline-block; padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: 500; }
.badge-success { background: var(--color-background-success); color: var(--color-text-success); }
.badge-warning { background: var(--color-background-warning); color: var(--color-text-warning); }
.badge-danger { background: var(--color-background-danger); color: var(--color-text-danger); }
.badge-info { background: #e6f1fb; color: #185fa5; }
.table { width: 100%; border-collapse: collapse; }
.table th { text-align: left; padding: 12px; border-bottom: 0.5px solid var(--color-border-tertiary); font-weight: 500; font-size: 13px; color: var(--color-text-secondary); }
.table td { padding: 14px 12px; border-bottom: 0.5px solid var(--color-border-tertiary); font-size: 14px; }
.table tr:hover { background: var(--color-background-secondary); }
.avatar { width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 500; font-size: 14px; }
.user-info { display: flex; align-items: center; gap: 12px; }
.action-btns { display: flex; gap: 8px; }
.icon-btn { width: 32px; height: 32px; border-radius: var(--border-radius-md); border: 0.5px solid var(--color-border-tertiary); display: flex; align-items: center; justify-content: center; background: transparent; cursor: pointer; transition: all 0.2s; }
.icon-btn:hover { background: var(--color-background-secondary); }
.admin-badge { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 2px 8px; border-radius: 4px; font-size: 10px; text-transform: uppercase; font-weight: 500; margin-left: 8px; }
</style>
<body>

                <div class="sidebar">
            <div class="logo">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect width="24" height="24" rx="6" fill="currentColor"/>
                <path d="M8 8h8M8 12h8M8 16h5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>CV Manager</span>
            </div>

            <div class="nav-section">Principal</div>
            <div class="nav-item active">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                <span>Dashboard</span>
            </div>
            <div class="nav-item">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>
                <span>Mon CV</span>
            </div>
            <div class="nav-item">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                <span>Mes compétences</span>
            </div>
            <div class="nav-item">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M17 8l-5-5-5 5M12 3v12"/></svg>
                <span>Exporter CV</span>
            </div>

            <div class="nav-section">Administration</div>
            <div class="nav-item">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v6M12 17v6M4.22 4.22l4.24 4.24M15.54 15.54l4.24 4.24M1 12h6M17 12h6M4.22 19.78l4.24-4.24M15.54 8.46l4.24-4.24"/></svg>
                <span>Paramètres</span>
            </div>
            <div class="nav-item">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg>
                <span>Déconnexion</span>
            </div>
            </div>

            <div class="main">
            <div class="header">
                <div class="header-left">
                <h1>Dashboard<span class="admin-badge">Admin</span></h1>
                <p>Vue d'ensemble de tous les CVs utilisateurs</p>
                </div>
                <div class="header-right">
                <div style="position: relative;">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0"/></svg>
                    <div style="position: absolute; top: -2px; right: -2px; width: 8px; height: 8px; background: #ef4444; border-radius: 50%;"></div>
                </div>
                <div class="user-info">
                    <div class="avatar" style="background: #4A90E2; color: white;">AD</div>
                    <div>
                    <div style="font-weight: 500; font-size: 14px;">Admin</div>
                    <div style="font-size: 12px; color: var(--color-text-secondary);">admin@cvmanager.com</div>
                    </div>
                </div>
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                <div class="stat-icon" style="background: #e6f1fb; color: #185fa5;">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <div class="stat-label">Total utilisateurs</div>
                <div class="stat-value">247</div>
                <div class="stat-change" style="color: var(--color-text-success);">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12V4M4 8l4-4 4 4"/></svg>
                    <span>+12% ce mois</span>
                </div>
                </div>

                <div class="stat-card">
                <div class="stat-icon" style="background: var(--color-background-success); color: var(--color-text-success);">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>
                </div>
                <div class="stat-label">CVs créés</div>
                <div class="stat-value">189</div>
                <div class="stat-change" style="color: var(--color-text-success);">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12V4M4 8l4-4 4 4"/></svg>
                    <span>+8% ce mois</span>
                </div>
                </div>

                <div class="stat-card">
                <div class="stat-icon" style="background: var(--color-background-warning); color: var(--color-text-warning);">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                </div>
                <div class="stat-label">Téléchargements</div>
                <div class="stat-value">1,342</div>
                <div class="stat-change" style="color: var(--color-text-success);">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12V4M4 8l4-4 4 4"/></svg>
                    <span>+24% ce mois</span>
                </div>
                </div>

                <div class="stat-card">
                <div class="stat-icon" style="background: #fbeaf0; color: #993556;">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                </div>
                <div class="stat-label">CVs actifs</div>
                <div class="stat-value">156</div>
                <div class="stat-change" style="color: var(--color-text-secondary);">
                    <span>82% du total</span>
                </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                <h2 class="card-title">Liste des utilisateurs et leurs CVs</h2>
                <div style="display: flex; gap: 12px;">
                    <input type="text" placeholder="Rechercher un utilisateur..." style="padding: 8px 16px; border-radius: var(--border-radius-md); border: 0.5px solid var(--color-border-tertiary); width: 280px;">
                    <button class="btn">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 6px;"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>
                    Filtrer
                    </button>
                    <button class="btn btn-primary">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 6px;"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M17 8l-5-5-5 5M12 3v12"/></svg>
                    Exporter tout
                    </button>
                </div>
                </div>

                <table class="table">
                <thead>
                    <tr>
                    <th>Utilisateur</th>
                    <th>Email</th>
                    <th>Poste</th>
                    <th>Compétences</th>
                    <th>Statut CV</th>
                    <th>Dernière MAJ</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <div class="user-info">
                        <div class="avatar" style="background: #4A90E2; color: white;">SY</div>
                        <div>
                            <div style="font-weight: 500;">Sylla Youssouf</div>
                            <div style="font-size: 12px; color: var(--color-text-secondary);">ID: #CV001</div>
                        </div>
                        </div>
                    </td>
                    <td>sylla.y@example.com</td>
                    <td>Développeur Web & Mobile Junior</td>
                    <td>
                        <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                        <span class="badge badge-info">PHP</span>
                        <span class="badge badge-info">Laravel</span>
                        <span class="badge badge-info">React</span>
                        </div>
                    </td>
                    <td><span class="badge badge-success">Complet</span></td>
                    <td style="color: var(--color-text-secondary);">Il y a 2h</td>
                    <td>
                        <div class="action-btns">
                        <button class="icon-btn" title="Voir le CV">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                        <button class="icon-btn" title="Télécharger">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                        </button>
                        <button class="icon-btn" title="Modifier">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        </button>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="user-info">
                        <div class="avatar" style="background: #10b981; color: white;">MK</div>
                        <div>
                            <div style="font-weight: 500;">Marie Kouassi</div>
                            <div style="font-size: 12px; color: var(--color-text-secondary);">ID: #CV002</div>
                        </div>
                        </div>
                    </td>
                    <td>marie.k@example.com</td>
                    <td>Designer UI/UX</td>
                    <td>
                        <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                        <span class="badge badge-info">Figma</span>
                        <span class="badge badge-info">Adobe XD</span>
                        </div>
                    </td>
                    <td><span class="badge badge-success">Complet</span></td>
                    <td style="color: var(--color-text-secondary);">Il y a 1 jour</td>
                    <td>
                        <div class="action-btns">
                        <button class="icon-btn" title="Voir le CV">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                        <button class="icon-btn" title="Télécharger">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                        </button>
                        <button class="icon-btn" title="Modifier">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        </button>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="user-info">
                        <div class="avatar" style="background: #f59e0b; color: white;">JD</div>
                        <div>
                            <div style="font-weight: 500;">Jean Diallo</div>
                            <div style="font-size: 12px; color: var(--color-text-secondary);">ID: #CV003</div>
                        </div>
                        </div>
                    </td>
                    <td>jean.d@example.com</td>
                    <td>Data Analyst</td>
                    <td>
                        <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                        <span class="badge badge-info">Python</span>
                        <span class="badge badge-info">SQL</span>
                        <span class="badge badge-info">Power BI</span>
                        </div>
                    </td>
                    <td><span class="badge badge-warning">En cours</span></td>
                    <td style="color: var(--color-text-secondary);">Il y a 3 jours</td>
                    <td>
                        <div class="action-btns">
                        <button class="icon-btn" title="Voir le CV">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                        <button class="icon-btn" title="Télécharger" disabled style="opacity: 0.5; cursor: not-allowed;">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                        </button>
                        <button class="icon-btn" title="Modifier">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        </button>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="user-info">
                        <div class="avatar" style="background: #ef4444; color: white;">AT</div>
                        <div>
                            <div style="font-weight: 500;">Ama Traoré</div>
                            <div style="font-size: 12px; color: var(--color-text-secondary);">ID: #CV004</div>
                        </div>
                        </div>
                    </td>
                    <td>ama.t@example.com</td>
                    <td>Chef de projet</td>
                    <td>
                        <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                        <span class="badge badge-info">Agile</span>
                        <span class="badge badge-info">Scrum</span>
                        </div>
                    </td>
                    <td><span class="badge badge-success">Complet</span></td>
                    <td style="color: var(--color-text-secondary);">Il y a 1 semaine</td>
                    <td>
                        <div class="action-btns">
                        <button class="icon-btn" title="Voir le CV">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                        <button class="icon-btn" title="Télécharger">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                        </button>
                        <button class="icon-btn" title="Modifier">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        </button>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="user-info">
                        <div class="avatar" style="background: #8b5cf6; color: white;">KN</div>
                        <div>
                            <div style="font-weight: 500;">Konan N'Guessan</div>
                            <div style="font-size: 12px; color: var(--color-text-secondary);">ID: #CV005</div>
                        </div>
                        </div>
                    </td>
                    <td>konan.n@example.com</td>
                    <td>DevOps Engineer</td>
                    <td>
                        <div style="display: flex; gap: 4px; flex-wrap: wrap;">
                        <span class="badge badge-info">Docker</span>
                        <span class="badge badge-info">Kubernetes</span>
                        <span class="badge badge-info">AWS</span>
                        </div>
                    </td>
                    <td><span class="badge badge-danger">Incomplet</span></td>
                    <td style="color: var(--color-text-secondary);">Il y a 2 semaines</td>
                    <td>
                        <div class="action-btns">
                        <button class="icon-btn" title="Voir le CV">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                        <button class="icon-btn" title="Télécharger" disabled style="opacity: 0.5; cursor: not-allowed;">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                        </button>
                        <button class="icon-btn" title="Modifier">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        </button>
                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>

                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px; padding-top: 20px; border-top: 0.5px solid var(--color-border-tertiary);">
                <div style="color: var(--color-text-secondary); font-size: 14px;">
                    Affichage de 1 à 5 sur 247 utilisateurs
                </div>
                <div style="display: flex; gap: 8px;">
                    <button class="icon-btn">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                    </button>
                    <button class="icon-btn" style="background: #4A90E2; color: white; border-color: #4A90E2;">1</button>
                    <button class="icon-btn">2</button>
                    <button class="icon-btn">3</button>
                    <button class="icon-btn">...</button>
                    <button class="icon-btn">50</button>
                    <button class="icon-btn">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </button>
                </div>
                </div>
            </div>
            </div>
    
</body>
</html>
