<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner - Tracer Study UAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #003366;
            --secondary-blue: #3b82f6;
            --light-blue: #dbeafe;
            --accent-yellow: #fab300;
            --light-yellow: #fef3c7;
        }

        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }

        .bg-primary-custom {
            background-color: var(--primary-blue) !important;
        }

        .bg-light-blue {
            background-color: var(--light-blue) !important;
        }

        .text-accent {
            color: var(--accent-yellow) !important;
        }

        .questionnaire-header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        .progress-section {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .progress {
            height: 12px;
            background-color: #e9ecef;
        }

        .progress-bar {
            background-color: var(--accent-yellow);
        }

        .question-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .question-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .question-nav-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-height: 400px;
            overflow-y: auto;
        }

        .question-nav-item {
            padding: 12px 15px;
            border-bottom: 1px solid #eaeaea;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .question-nav-item:hover {
            background-color: var(--light-blue);
        }

        .question-nav-item.active {
            background-color: var(--light-blue);
            border-left: 4px solid var(--accent-yellow);
        }

        .question-nav-item.answered {
            color: var(--primary-blue);
            font-weight: 500;
        }

        .question-nav-item.locked {
            cursor: not-allowed;
            opacity: 0.6;
            background-color: #f8f9fa;
        }

        .question-nav-item.locked:hover {
            background-color: #f8f9fa;
        }

        .nav-status {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
        }

        .nav-status.answered {
            background-color: #28a745;
            color: white;
        }

        .nav-status.current {
            background-color: var(--accent-yellow);
            color: white;
        }

        .nav-status.pending {
            background-color: #6c757d;
            color: white;
        }

        .nav-status.locked {
            background-color: #dc3545;
            color: white;
        }

        .answer-option {
            padding: 15px;
            border: 2px solid #eaeaea;
            border-radius: 8px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .answer-option:hover {
            border-color: var(--secondary-blue);
            background-color: var(--light-blue);
        }

        .answer-option.selected {
            border-color: var(--accent-yellow);
            background-color: var(--light-yellow);
        }

        .btn-group-left {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-group-right {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 20px 0;
            margin-top: 50px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .question-nav-card {
                margin-bottom: 20px;
            }
            
            .navigation-buttons {
                flex-direction: column;
                gap: 15px;
            }
            
            .btn-group-left, .btn-group-right {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="questionnaire-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="fw-bold mb-0" style="color: var(--primary-blue);">Kuesioner 1 - Data Diri & Pendidikan
                    </h3>
                    <p class="text-muted mb-0">Isi dengan data yang valid dan akurat</p>
                </div>
                <div class="text-end">
                    <p class="mb-0"><strong>Deny Iqbal</strong></p>
                    <p class="text-muted mb-0 small">Teknik Informatika 2018</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container py-4">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="progress-section p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-semibold" id="progressText">Progress: Pertanyaan 10 dari 10</span>
                            <span class="fw-bold text-accent" id="progressPercent">100%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" id="progressBar" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4" data-aos="fade-right">
                    <div class="question-nav-card p-3">
                        <h5 class="fw-bold mb-3" style="color: var(--primary-blue);">Daftar Pertanyaan</h5>

                        <div class="question-nav-item answered" data-question-id="1">
                            <div class="d-flex align-items-center">
                                <div class="nav-status answered me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Data Pribadi</span>
                                </div>
                                <div class="question-number small">1</div>
                            </div>
                        </div>

                        <div class="question-nav-item answered" data-question-id="2">
                            <div class="d-flex align-items-center">
                                <div class="nav-status answered me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Informasi Kontak</span>
                                </div>
                                <div class="question-number small">2</div>
                            </div>
                        </div>

                        <div class="question-nav-item answered" data-question-id="3">
                            <div class="d-flex align-items-center">
                                <div class="nav-status answered me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Riwayat Pendidikan</span>
                                </div>
                                <div class="question-number small">3</div>
                            </div>
                        </div>

                        <div class="question-nav-item answered" data-question-id="4">
                            <div class="d-flex align-items-center">
                                <div class="nav-status answered me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Pengalaman Organisasi</span>
                                </div>
                                <div class="question-number small">4</div>
                            </div>
                        </div>

                        <div class="question-nav-item answered" data-question-id="5">
                            <div class="d-flex align-items-center">
                                <div class="nav-status answered me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Status Pekerjaan</span>
                                </div>
                                <div class="question-number small">5</div>
                            </div>
                        </div>

                        <div class="question-nav-item answered" data-question-id="6">
                            <div class="d-flex align-items-center">
                                <div class="nav-status answered me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Informasi Perusahaan</span>
                                </div>
                                <div class="question-number small">6</div>
                            </div>
                        </div>

                        <div class="question-nav-item answered" data-question-id="7">
                            <div class="d-flex align-items-center">
                                <div class="nav-status answered me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Posisi & Jabatan</span>
                                </div>
                                <div class="question-number small">7</div>
                            </div>
                        </div>

                        <div class="question-nav-item answered" data-question-id="8">
                            <div class="d-flex align-items-center">
                                <div class="nav-status answered me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Gaji & Benefit</span>
                                </div>
                                <div class="question-number small">8</div>
                            </div>
                        </div>

                        <div class="question-nav-item answered" data-question-id="9">
                            <div class="d-flex align-items-center">
                                <div class="nav-status answered me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Kesesuaian Bidang</span>
                                </div>
                                <div class="question-number small">9</div>
                            </div>
                        </div>

                        <div class="question-nav-item active current" data-question-id="10">
                            <div class="d-flex align-items-center">
                                <div class="nav-status current me-3">
                                    <i class="fas fa-pen"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <span>Keterampilan yang Digunakan</span>
                                </div>
                                <div class="question-number small">10</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-left">
                    <div class="question-card p-4">
                        <div class="d-flex align-items-start mb-4">
                            <div class="question-number" id="currentQuestionNumber">10</div>
                            <div class="flex-grow-1">
                                <h4 class="fw-bold mb-3" id="currentQuestionTitle">Keterampilan apa yang digunakan dalam pekerjaan?</h4>
                                <p class="text-muted" id="currentQuestionDescription">Pilih keterampilan yang paling sering Anda gunakan dalam pekerjaan saat ini</p>
                            </div>
                        </div>

                        <div id="dynamicAnswerArea">
                            <!-- Area ini akan diisi secara dinamis berdasarkan tipe pertanyaan -->
                        </div>

                        <div class="d-flex justify-content-between align-items-center pt-3 navigation-buttons">
                            <div class="btn-group-left">
                                <button class="btn btn-outline-secondary" id="backToMainBtn">
                                    <i class="fas fa-home me-2"></i> Kembali ke Halaman Utama
                                </button>
                                <button class="btn btn-outline-primary" id="prevQuestionBtn">
                                    <i class="fas fa-arrow-left me-2"></i> Pertanyaan Sebelumnya
                                </button>
                            </div>

                            <div class="btn-group-right" id="dynamicButtonGroup">
                                <!-- Tombol akan diisi secara dinamis -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="mb-0">&copy; 2025 Tracer Study Universitas Ahmad Dahlan.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Konfigurasi
        const TOTAL_QUESTIONS = 10;
        let currentQuestionId = 10; // Sedang di pertanyaan terakhir
        let highestAnsweredQuestion = 10; // Pertanyaan tertinggi yang sudah dijawab

        // Data pertanyaan yang lebih lengkap dengan tipe yang berbeda-beda
        const questions = {
            1: {
                title: "Data Pribadi",
                description: "Isi data pribadi Anda dengan lengkap dan benar",
                number: 1,
                type: "form", // Tipe: form input
                fields: [
                    { label: "Nama Lengkap", type: "text", name: "fullname", placeholder: "Masukkan nama lengkap", required: true },
                    { label: "Tempat Lahir", type: "text", name: "birthplace", placeholder: "Masukkan tempat lahir", required: true },
                    { label: "Tanggal Lahir", type: "date", name: "birthdate", required: true },
                    { label: "Jenis Kelamin", type: "radio", name: "gender", options: ["Laki-laki", "Perempuan"], required: true }
                ]
            },
            2: {
                title: "Informasi Kontak",
                description: "Berikan informasi kontak yang dapat dihubungi",
                number: 2,
                type: "form",
                fields: [
                    { label: "Email", type: "email", name: "email", placeholder: "contoh@email.com", required: true },
                    { label: "Nomor Telepon", type: "tel", name: "phone", placeholder: "08xxxxxxxxxx", required: true },
                    { label: "Alamat", type: "textarea", name: "address", placeholder: "Masukkan alamat lengkap", rows: 3, required: true }
                ]
            },
            3: {
                title: "Riwayat Pendidikan",
                description: "Ceritakan riwayat pendidikan Anda",
                number: 3,
                type: "form",
                fields: [
                    { label: "Jenjang Pendidikan Terakhir", type: "select", name: "education", options: ["D3", "S1", "S2", "S3"], required: true },
                    { label: "Nama Institusi", type: "text", name: "institution", placeholder: "Nama universitas/instansi", required: true },
                    { label: "Jurusan", type: "text", name: "major", placeholder: "Jurusan yang diambil", required: true },
                    { label: "Tahun Lulus", type: "number", name: "graduation_year", placeholder: "Tahun kelulusan", min: 1990, max: 2025, required: true }
                ]
            },
            4: {
                title: "Pengalaman Organisasi",
                description: "Bagikan pengalaman organisasi Anda",
                number: 4,
                type: "textarea",
                placeholder: "Ceritakan pengalaman organisasi Anda selama kuliah atau setelah lulus...",
                rows: 5
            },
            5: {
                title: "Apa status pekerjaan Anda saat ini?",
                description: "Pilih salah satu opsi yang paling sesuai dengan kondisi Anda",
                number: 5,
                type: "radio",
                options: [
                    "Bekerja (Full-time)",
                    "Bekerja (Part-time/Paruh Waktu)",
                    "Wirausaha/Memiliki Usaha Sendiri",
                    "Belum Bekerja (Sedang Mencari Pekerjaan)",
                    "Melanjutkan Studi",
                    "Lainnya"
                ]
            },
            6: {
                title: "Informasi Perusahaan",
                description: "Isi informasi perusahaan tempat Anda bekerja",
                number: 6,
                type: "form",
                fields: [
                    { label: "Nama Perusahaan", type: "text", name: "company_name", placeholder: "Nama perusahaan", required: true },
                    { label: "Alamat Perusahaan", type: "textarea", name: "company_address", placeholder: "Alamat lengkap perusahaan", rows: 3, required: true },
                    { label: "Industri", type: "text", name: "industry", placeholder: "Bidang industri perusahaan", required: true },
                    { label: "Website Perusahaan", type: "url", name: "company_website", placeholder: "https://..." }
                ]
            },
            7: {
                title: "Posisi & Jabatan",
                description: "Jelaskan posisi dan jabatan Anda",
                number: 7,
                type: "form",
                fields: [
                    { label: "Posisi/Jabatan", type: "text", name: "position", placeholder: "Jabatan Anda di perusahaan", required: true },
                    { label: "Divisi/Departemen", type: "text", name: "department", placeholder: "Divisi tempat bekerja", required: true },
                    { label: "Tanggal Mulai Bekerja", type: "date", name: "start_date", required: true },
                    { label: "Deskripsi Pekerjaan", type: "textarea", name: "job_description", placeholder: "Jelaskan tugas dan tanggung jawab Anda", rows: 4, required: true }
                ]
            },
            8: {
                title: "Gaji & Benefit",
                description: "Informasi mengenai gaji dan benefit",
                number: 8,
                type: "form",
                fields: [
                    { label: "Range Gaji Bulanan", type: "select", name: "salary_range", options: ["< Rp 3.000.000", "Rp 3.000.000 - Rp 5.000.000", "Rp 5.000.000 - Rp 8.000.000", "Rp 8.000.000 - Rp 12.000.000", "> Rp 12.000.000"], required: true },
                    { label: "Benefit yang Diterima", type: "checkbox", name: "benefits", options: ["BPJS Kesehatan", "BPJS Ketenagakerjaan", "Asuransi Swasta", "Tunjangan Makan", "Tunjangan Transportasi", "Bonus Tahunan", "Lainnya"] },
                    { label: "Benefit Lainnya", type: "text", name: "other_benefits", placeholder: "Tulis benefit lainnya..." }
                ]
            },
            9: {
                title: "Kesesuaian Bidang",
                description: "Seberapa sesuai pekerjaan dengan bidang studi",
                number: 9,
                type: "scale",
                min: 1,
                max: 5,
                labels: {
                    1: "Sangat Tidak Sesuai",
                    2: "Tidak Sesuai", 
                    3: "Cukup Sesuai",
                    4: "Sesuai",
                    5: "Sangat Sesuai"
                }
            },
            10: {
                title: "Keterampilan apa yang digunakan dalam pekerjaan?",
                description: "Pilih keterampilan yang paling sering Anda gunakan dalam pekerjaan saat ini",
                number: 10,
                type: "checkbox",
                options: [
                    "Pemrograman & Software Development",
                    "Analisis Data & Business Intelligence", 
                    "Desain UI/UX & Graphic Design",
                    "Manajemen Proyek & Tim",
                    "Komunikasi & Presentasi",
                    "Problem Solving & Critical Thinking",
                    "Bahasa Asing",
                    "Kepemimpinan & Manajemen"
                ],
                other: true
            }
        };

        // Function to render dynamic answer area berdasarkan tipe pertanyaan
        function renderAnswerArea(questionId) {
            const question = questions[questionId];
            const answerArea = document.getElementById('dynamicAnswerArea');
            
            if (!question) return;
            
            let html = '';
            
            switch(question.type) {
                case 'radio':
                    html = renderRadioOptions(question);
                    break;
                case 'checkbox':
                    html = renderCheckboxOptions(question);
                    break;
                case 'form':
                    html = renderFormFields(question);
                    break;
                case 'textarea':
                    html = renderTextarea(question);
                    break;
                case 'scale':
                    html = renderScale(question);
                    break;
                default:
                    html = '<p>Tipe pertanyaan tidak dikenali</p>';
            }
            
            answerArea.innerHTML = html;
            
            // Attach event listeners setelah render
            attachAnswerEvents();
        }

        // Render radio options
        function renderRadioOptions(question) {
            let html = '<div class="mb-4">';
            question.options.forEach((option, index) => {
                html += `
                    <div class="answer-option" data-answer="${option.toLowerCase().replace(/\s+/g, '-')}">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question_${question.number}" id="option_${index}">
                            <label class="form-check-label fw-medium" for="option_${index}">
                                ${option}
                            </label>
                        </div>
                    </div>
                `;
            });
            html += '</div>';
            return html;
        }

        // Render checkbox options
        function renderCheckboxOptions(question) {
            let html = '<div class="mb-4">';
            question.options.forEach((option, index) => {
                html += `
                    <div class="answer-option" data-answer="${option.toLowerCase().replace(/\s+/g, '-')}">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="question_${question.number}" id="option_${index}">
                            <label class="form-check-label fw-medium" for="option_${index}">
                                ${option}
                            </label>
                        </div>
                    </div>
                `;
            });
            
            if (question.other) {
                html += `
                    <div class="mt-3">
                        <label for="otherSkills" class="form-label fw-medium">Keterampilan lain yang tidak tercantum di atas:</label>
                        <textarea class="form-control" id="otherSkills" rows="2" placeholder="Tuliskan keterampilan lain yang Anda gunakan..."></textarea>
                    </div>
                `;
            }
            
            html += '</div>';
            return html;
        }

        // Render form fields
        function renderFormFields(question) {
            let html = '<div class="form-section">';
            question.fields.forEach((field, index) => {
                html += `<div class="mb-3">`;
                html += `<label for="field_${index}" class="form-label fw-medium">${field.label}${field.required ? ' <span class="text-danger">*</span>' : ''}</label>`;
                
                switch(field.type) {
                    case 'text':
                    case 'email':
                    case 'tel':
                    case 'url':
                    case 'number':
                    case 'date':
                        html += `<input type="${field.type}" class="form-control" id="field_${index}" name="${field.name}" placeholder="${field.placeholder || ''}" ${field.required ? 'required' : ''} ${field.min ? `min="${field.min}"` : ''} ${field.max ? `max="${field.max}"` : ''}>`;
                        break;
                    case 'textarea':
                        html += `<textarea class="form-control" id="field_${index}" name="${field.name}" rows="${field.rows || 3}" placeholder="${field.placeholder || ''}" ${field.required ? 'required' : ''}></textarea>`;
                        break;
                    case 'select':
                        html += `<select class="form-select" id="field_${index}" name="${field.name}" ${field.required ? 'required' : ''}>`;
                        html += `<option value="">Pilih ${field.label.toLowerCase()}</option>`;
                        field.options.forEach(option => {
                            html += `<option value="${option}">${option}</option>`;
                        });
                        html += `</select>`;
                        break;
                    case 'radio':
                        field.options.forEach((option, optIndex) => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="${field.name}" id="field_${index}_${optIndex}" value="${option}" ${field.required ? 'required' : ''}>
                                    <label class="form-check-label" for="field_${index}_${optIndex}">${option}</label>
                                </div>
                            `;
                        });
                        break;
                    case 'checkbox':
                        field.options.forEach((option, optIndex) => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="${field.name}" id="field_${index}_${optIndex}" value="${option}">
                                    <label class="form-check-label" for="field_${index}_${optIndex}">${option}</label>
                                </div>
                            `;
                        });
                        break;
                }
                
                html += `</div>`;
            });
            html += '</div>';
            return html;
        }

        // Render textarea
        function renderTextarea(question) {
            return `
                <div class="mb-4">
                    <textarea class="form-control" id="question_textarea" rows="${question.rows || 5}" placeholder="${question.placeholder || ''}"></textarea>
                </div>
            `;
        }

        // Render scale (1-5, 1-10, etc)
        function renderScale(question) {
            let html = '<div class="mb-4 text-center">';
            html += `<div class="scale-container mb-3">`;
            
            for (let i = question.min; i <= question.max; i++) {
                html += `
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="scale_question" id="scale_${i}" value="${i}">
                        <label class="form-check-label d-block" for="scale_${i}">
                            <div class="scale-number">${i}</div>
                            <small class="scale-label">${question.labels[i] || ''}</small>
                        </label>
                    </div>
                `;
            }
            
            html += `</div></div>`;
            
            // Add CSS for scale
            const style = document.createElement('style');
            style.textContent = `
                .scale-number {
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    background: var(--light-blue);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 5px;
                    font-weight: bold;
                    transition: all 0.2s ease;
                }
                .scale-label {
                    font-size: 0.75rem;
                    max-width: 80px;
                    display: block;
                }
                .form-check-input:checked + .form-check-label .scale-number {
                    background: var(--accent-yellow);
                    color: white;
                }
            `;
            document.head.appendChild(style);
            
            return html;
        }

        // Function to render dynamic buttons
        function renderButtons(questionId) {
            const buttonGroup = document.getElementById('dynamicButtonGroup');
            const isLastQuestion = questionId === TOTAL_QUESTIONS;
            
            let html = `
                <button class="btn btn-outline-secondary" id="saveDraftBtn">
                    <i class="fas fa-save me-2"></i> Simpan Sementara
                </button>
            `;
            
            if (isLastQuestion) {
                html += `
                    <button class="btn btn-success" id="submitQuestionnaireBtn">
                        <i class="fas fa-paper-plane me-2"></i> Kirim Kuesioner
                    </button>
                `;
            } else {
                html += `
                    <button class="btn btn-primary-custom" id="nextQuestionBtn">
                        Selanjutnya <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                `;
            }
            
            buttonGroup.innerHTML = html;
            
            // Re-attach event listeners
            document.getElementById('saveDraftBtn').addEventListener('click', saveDraft);
            if (isLastQuestion) {
                document.getElementById('submitQuestionnaireBtn').addEventListener('click', submitQuestionnaire);
            } else {
                document.getElementById('nextQuestionBtn').addEventListener('click', goToNextQuestion);
            }
        }

        // Attach events untuk answer options
        function attachAnswerEvents() {
            // Untuk radio dan checkbox options
            document.querySelectorAll('.answer-option').forEach(option => {
                option.addEventListener('click', function () {
                    const input = this.querySelector('input[type="radio"], input[type="checkbox"]');
                    if (input) {
                        if (input.type === 'radio') {
                            // Untuk radio, remove selected dari semua, lalu add ke yang diklik
                            document.querySelectorAll('.answer-option').forEach(opt => {
                                opt.classList.remove('selected');
                            });
                            this.classList.add('selected');
                            input.checked = true;
                        } else {
                            // Untuk checkbox, toggle selected
                            input.checked = !input.checked;
                            if (input.checked) {
                                this.classList.add('selected');
                            } else {
                                this.classList.remove('selected');
                            }
                        }
                    }
                });
            });
        }

        // Function to update progress
        function updateProgress(questionId) {
            const progressPercent = (questionId / TOTAL_QUESTIONS) * 100;
            const progressText = `Progress: Pertanyaan ${questionId} dari ${TOTAL_QUESTIONS}`;
            const progressPercentText = `${Math.round(progressPercent)}%`;
            
            document.getElementById('progressBar').style.width = `${progressPercent}%`;
            document.getElementById('progressText').textContent = progressText;
            document.getElementById('progressPercent').textContent = progressPercentText;
        }

        // MODIFIKASI: Question navigation functionality dengan pembatasan
        document.querySelectorAll('.question-nav-item').forEach(item => {
            item.addEventListener('click', function () {
                const questionId = parseInt(this.getAttribute('data-question-id'));
                
                // Cek apakah pertanyaan ini sudah dijawab atau tidak
                if (questionId <= highestAnsweredQuestion) {
                    navigateToQuestion(questionId);
                } else {
                    // Tampilkan pesan bahwa pertanyaan belum bisa diakses
                    showNotification('Anda harus menyelesaikan pertanyaan sebelumnya terlebih dahulu', 'warning');
                }
            });
        });

        // Function untuk navigasi pertanyaan
        function navigateToQuestion(questionId) {
            currentQuestionId = questionId;
            updateQuestionDisplay(questionId);
            updateNavigationStates(questionId);
            updateProgress(questionId);
            renderAnswerArea(questionId);
            renderButtons(questionId);
        }

        // Function to update question display
        function updateQuestionDisplay(questionId) {
            const question = questions[questionId];
            
            if (!question) return;
            
            document.getElementById('currentQuestionNumber').textContent = question.number;
            document.getElementById('currentQuestionTitle').textContent = question.title;
            document.getElementById('currentQuestionDescription').textContent = question.description;
        }

        // MODIFIKASI: Function to update navigation states dengan status locked
        function updateNavigationStates(questionId) {
            document.querySelectorAll('.question-nav-item').forEach(navItem => {
                navItem.classList.remove('active', 'current', 'locked');
                
                const statusIcon = navItem.querySelector('.nav-status');
                const itemQuestionId = parseInt(navItem.getAttribute('data-question-id'));
                
                if (itemQuestionId < currentQuestionId) {
                    navItem.classList.add('answered');
                    statusIcon.className = 'nav-status answered me-3';
                    statusIcon.innerHTML = '<i class="fas fa-check"></i>';
                } else if (itemQuestionId === currentQuestionId) {
                    navItem.classList.add('current');
                    statusIcon.className = 'nav-status current me-3';
                    statusIcon.innerHTML = '<i class="fas fa-pen"></i>';
                } else if (itemQuestionId > highestAnsweredQuestion) {
                    // Pertanyaan yang belum bisa diakses
                    navItem.classList.add('locked');
                    statusIcon.className = 'nav-status locked me-3';
                    statusIcon.innerHTML = '<i class="fas fa-lock"></i>';
                } else {
                    navItem.classList.remove('answered');
                    statusIcon.className = 'nav-status pending me-3';
                    statusIcon.innerHTML = '';
                }
            });

            const currentNavItem = document.querySelector(`[data-question-id="${questionId}"]`);
            if (currentNavItem) {
                currentNavItem.classList.add('active');
            }
        }

        // Navigation functions
        document.getElementById('prevQuestionBtn').addEventListener('click', function() {
            if (currentQuestionId > 1) {
                navigateToQuestion(currentQuestionId - 1);
            }
        });

        function goToNextQuestion() {
            if (currentQuestionId < TOTAL_QUESTIONS) {
                // Update highestAnsweredQuestion jika user menjawab pertanyaan baru
                if (currentQuestionId === highestAnsweredQuestion) {
                    highestAnsweredQuestion = currentQuestionId + 1;
                }
                navigateToQuestion(currentQuestionId + 1);
            }
        }

        // Tombol kembali ke halaman utama
        document.getElementById('backToMainBtn').addEventListener('click', function() {
            if (confirm('Apakah Anda yakin ingin kembali ke halaman utama? Perubahan yang belum disimpan akan hilang.')) {
                window.location.href = 'halaman-utama-kuesioner.html';
            }
        });

        // Simpan sementara
        function saveDraft() {
            alert('Jawaban berhasil disimpan sementara!');
        }

        // Kirim kuesioner
        function submitQuestionnaire() {
            if (confirm('Apakah Anda yakin ingin mengirim kuesioner? Setelah dikirim, Anda tidak dapat mengubah jawaban.')) {
                alert('Kuesioner berhasil dikirim! Terima kasih atas partisipasi Anda.');
                window.location.href = 'halaman-utama-kuesioner.html';
            }
        }

        // MODIFIKASI: Function untuk menampilkan notifikasi
        function showNotification(message, type = 'info') {
            // Buat elemen toast
            const toast = document.createElement('div');
            toast.className = `toast align-items-center text-white bg-${type === 'warning' ? 'warning' : 'info'} border-0 position-fixed top-0 end-0 m-3`;
            toast.style.zIndex = '9999';
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;

            // Tambahkan ke body
            document.body.appendChild(toast);

            // Inisialisasi dan tampilkan toast
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();

            // Hapus toast setelah ditutup
            toast.addEventListener('hidden.bs.toast', function() {
                document.body.removeChild(toast);
            });
        }

        // Initialize
        updateProgress(currentQuestionId);
        updateNavigationStates(currentQuestionId);
        renderAnswerArea(currentQuestionId);
        renderButtons(currentQuestionId);
    </script>
</body>

</html>