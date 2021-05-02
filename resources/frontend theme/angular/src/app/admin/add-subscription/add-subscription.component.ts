import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-add-subscription',
  templateUrl: './add-subscription.component.html',
  styleUrls: ['./add-subscription.component.css']
})
export class AddSubscriptionComponent implements OnInit {

  constructor(private router: Router) { }

  ngOnInit(): void {
  }
  submit() {
    this.router.navigate(['/admin/subscriptions']);
  }

}
