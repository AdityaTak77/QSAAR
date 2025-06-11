# QSAAR – Medical Website with Voice Assistant

A full-stack medical assistant web application that integrates a voice-enabled chatbot for prescription-based predictions and general health assistance.

## 🌐 Project Overview

QSAAR (Quick Symptom Analyzer and Assistant with Recommendation) is a smart medical assistant that combines a web interface and a machine learning backend to:
- Help users interact with a healthcare bot via text or voice.
- Predict drug prescriptions based on input symptoms.
- Provide detailed medical advice and user-friendly navigation.

## 💡 Features

- 🧠 **ML-powered Predictions**: Uses trained models to suggest prescriptions from symptoms.
- 🎙 **Voice Assistant**: Integrates speech-to-text for seamless voice interaction.
- 💊 **Health Chatbot**: Simple Q&A-style interaction for users.
- 🌍 **Frontend + Backend Integration**: Built with Flask backend and JavaScript-based frontend.

## 🛠️ Tech Stack

### Frontend
- HTML5, CSS3, JavaScript
- Bootstrap 4
- Web Speech API for voice input

### Backend
- Python (Flask)
- Scikit-learn, Pandas, NumPy
- Pickle for model serialization
- TensorFlow/Keras (`model.h5`)

### Data
- Custom Drug Prescription Dataset (`Drug prescription Dataset.csv`)

## 📁 Project Structure

```

QSAAR/
├── Website/
│   └── Medical-Website-With-Voice-Assistant-main/
│       ├── index.html
│       ├── chatbot.html
│       └── static/, js/, css/, ...
├── Backend/
│   └── Medical-Website-With-Voice-Assistant-main/
│       ├── app.py
│       ├── model.h5
│       ├── labels.pkl, texts.pkl
│       └── utils/, routes/, ...
└── Drug prescription Dataset.csv

````

## 🚀 Getting Started

### 1. Clone the Repository
```bash
git clone https://github.com/Anshul-ydv/QSAAR.git
cd QSAAR
````

### 2. Install Backend Requirements

```bash
cd Backend/Medical-Website-With-Voice-Assistant-main
pip install -r requirements.txt
```

> If `requirements.txt` is missing, use:

```bash
pip install flask pandas numpy scikit-learn tensorflow
```

### 3. Run the Backend Server

```bash
python app.py
```

### 4. Open the Frontend

Open `Website/Medical-Website-With-Voice-Assistant-main/index.html` in your browser.

## 🧪 Model Details

The prescription prediction model was trained on a structured dataset of symptoms and corresponding drug recommendations. It uses:

* TF-IDF vectorization
* Classification algorithm (e.g., Logistic Regression or Neural Network)

## 🎯 Goals

* Simplify basic health interactions through AI.
* Offer multilingual voice capabilities.
* Extendable for disease prediction, diagnosis support, or telemedicine use cases.

## 🤝 Contributions

Feel free to fork this repo, improve it, and create pull requests. Suggestions are welcome!

## 📜 License

This project is licensed under the MIT License.
