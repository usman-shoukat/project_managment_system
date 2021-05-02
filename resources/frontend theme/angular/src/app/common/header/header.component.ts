import {
  Component,
  OnInit,
  AfterViewInit,
  Inject,
} from '@angular/core';
import { Event, Router, NavigationStart } from '@angular/router';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css'],
})
export class HeaderComponent implements OnInit {
  splitVal;
  base = '';
  page = '';
  constructor(
    public router: Router
  ) {    
  }

  ngOnInit(): void {
    this.router.events.subscribe((event: Event) => {
      if (event instanceof NavigationStart) {
        this.splitVal = event.url.split('/');
        this.base = this.splitVal[1];
        this.page = this.splitVal[2];
      }
    });
  }

}

