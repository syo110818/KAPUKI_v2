FROM python:3.9-slim

WORKDIR /app


COPY requirements.txt /tmp/
RUN pip install --no-cache-dir -r /tmp/requirements.txt

CMD ["python", "app.py"]
