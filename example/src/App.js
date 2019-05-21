import React, { Component } from 'react';
class App extends Component {

  constructor(props) {
    super(props);
    this.state = {
      query: "", // my query
      artist: null  // my response.
    }
  }

  search() {
    console.log('this.state', this.state);
    const BASE_URL = 'https://api.spotify.com/v1/search?';
    const FETCH_URL = BASE_URL + 'q=' + this.state.query + '&type=artist&limit=1';
    var accessToken = 'BQB7hUVPHs6yDK4rRkrmQ6D6itdvO_e291PcpRkCTWwg-XjiwLokc2Hk7GGSHtD-01p7yY7FNbcc6mTe6RNYhdJo9_TLWmgxAy7wBZGpRxVaK4Bz5OarXrkQWiBtj5gsJcCI2raKu_wefntibA1_6tIXPhYbfMINdqgOErjn&refresh_token=AQChVF4CX90odzOwTxqBt8cfUQUXU03ydyGT6KmewnVpl1auXraApTP2ZKAMnCnVIVuKtlzf4LCBsPLFTezxRxBMxt9eal8CUM9CBVG85qCkDZFrOzqaNkGojNMZiBXOBQ-A8A'

    var myOptions = {
      method: 'GET',
      headers: {
        'Authorization': 'Bearer ' + accessToken
      },
      mode: 'cors',
      cache: 'default'
    };

    fetch(FETCH_URL, myOptions)
      .then(response => response.json())
      .then(json => {
        const artist = json.artists.items[0];        
        this.setState({ artist });
      })

  }

  render() {

    let artist = {
      name: '',
      followers: {
        total: ''
      }
    };
    if (this.state.artist !== null) {
      artist = this.state.artist;
    }

    return (
      // return JSX 
      <div className="container">
        <hr />
        <div className="col-lg-6">
          <div className="input-group">
            <input type="text" 
              onChange={event => { this.setState({ query: event.target.value }) }}
            className="form-control" placeholder="Search for..." />
            <span className="input-group-btn">
              <button 
              onClick={()=> this.search()}
               className="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
        <hr />
        <div>
          <div> {artist.name}   </div>
          <div> {artist.followers.total} </div>
        </div>


        </div>
    )
  }
}
export default App;
