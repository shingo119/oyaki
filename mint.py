import os

import requests
import random
import string
import time

def POST_v1_item_tokens_contractId_non_fungibles_tokenType_mint():
    server_url = os.environ['SERVER_URL']
    service_api_key = os.environ['SERVICE_API_KEY']
    service_api_secret = os.environ['SERVICE_API_SECRET']

    nonce = ''.join(random.choice(string.ascii_uppercase + string.ascii_lowercase + string.digits) for _ in range(8))
    timestamp = int(round(time.time() * 1000))


    path = '/v1/item-tokens/61e14383/non-fungibles/10000001/mint'

    request_body = {
        'ownerAddress': 'tlink1fr9mpexk5yq3hu6jc0npajfsa0x7tl427fuveq',
        'ownerSecret': 'PCSO7JBIH1gWPNNR5vT58Hr2SycFSUb9nzpNapNjJFU=',
        'toAddress': 'tlink1wxxfe3etmaxv8hvrdxfwveewrcynynhlnm0jkn',
        'name': 'Nnq8Eda',
        'meta': '5y4bh'
    }

    headers = {
        'service-api-key': service_api_key,
        'nonce': nonce,
        'timestamp': str(timestamp),
        'Content-Type': 'application/json'
    }


    signature = get_signature('POST', path, nonce, timestamp, service_api_secret, body=request_body)
    headers['signature'] = signature

    res = requests.post(server_url + path, headers=headers, json=request_body)
    return res.json()