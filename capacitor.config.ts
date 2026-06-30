import { CapacitorConfig } from '@capacitor/cli';

const config: CapacitorConfig = {
    appId: 'com.snamedika.portal',
    appName: 'SNA Medika Portal',

    webDir: 'public',



    server: {
        url: 'https://merchants-vault-computing-interactions.trycloudflare.com/',
        cleartext: false,
        errorPath: '/index.html'
    }

};

export default config;