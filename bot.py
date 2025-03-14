from flask import Flask, request, jsonify
from sentence_transformers import SentenceTransformer, util
import json

app = Flask(__name__)

with open('public/ghands.json', 'r') as f:
    data = json.load(f)

inputs = [item['input'] for item in data]
outputs = [item['output'] for item in data]

# Sample model
model = SentenceTransformer('all-MiniLM-L6-v2')
input_embeddings = model.encode(inputs, convert_to_tensor=True)

# Get the chatbot response
def get_response(query):
    query_embedding = model.encode(query, convert_to_tensor=True)
    similarity = util.pytorch_cos_sim(query_embedding, input_embeddings)
    index = similarity.argmax().item()
    return outputs[index]

# Flask API Route
@app.route('/chat', methods=['POST'])
def chat():
    user_message = request.json['message']
    response = get_response(user_message)
    return jsonify({'response': response})

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)