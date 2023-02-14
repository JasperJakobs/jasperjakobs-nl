# Runs while building the image.
FROM node:14-alpine
COPY . .
RUN npm install --silent

RUN npm run prod
RUN npm install -g serve

ARG PORT
ENV ENV_PORT=$PORT

# Runs when the container is started.
EXPOSE $ENV_PORT
CMD serve -l $ENV_PORT -s build

