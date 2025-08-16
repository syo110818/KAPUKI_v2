FROM python:3.9-slim
WORKDIR /app
COPY . /app
RUN pip install flask
RUN pip install --no-cache-dir mysql-connector-python
RUN pip install flask mysql-connector-python flask-cors

CMD ["python", "app.py"]
